<?php

namespace App\Services;

use App\Rota;
use App\Models\SingleManningInterface as SingleManningModelInterface;
use App\Models\SingleManning as SingleManningModel;
use DateTime;

class SingleManningService implements SingleManningServiceInterface
{
    public function calculate(Rota $rota): SingleManningModelInterface
    {
        $singleManningDTO = new SingleManningModel();

        /**
         * Loop through associated shifts
         * Index by date
         * If date only has one shift, then calculate SM as difference of that single shift
         * If date has more than one shift:
         *      If start & end-dates do not overlap, the the SM is sum of all of the shift SMs
         */
        $indexedShifts = $this->indexShiftsByDate($rota->shifts);

        foreach ($indexedShifts as $dateString => $shifts) {
            $dayName = (new DateTime($dateString))->format('l');
            if (!isset($shifts[1])) {
                $singleManningDTO[strtolower($dayName)] = $this->calculateTimeDifferenceInMinutes(
                    new DateTime($shifts[0]->start_time),
                    new DateTime($shifts[0]->end_time)
                );
            }
        }

        return $singleManningDTO;
    }

    private function indexShiftsByDate($shifts)
    {
        $index = [];
        
        foreach ($shifts as $shift) {
            $date = new DateTime($shift->start_time);

            $index[$date->format('Y-m-d')][] = $shift;
        }

        return $index;
    }

    private function calculateTimeDifferenceInMinutes(DateTime $startDate, DateTime $endDate)
    {
        $interval = $endDate->diff($startDate);

        return $interval->i + ($interval->h * 60);
    }
}