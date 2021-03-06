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

        $indexedShifts = $this->indexShiftsByDate($rota->shifts);

        foreach ($indexedShifts as $dateString => $shifts) {
            $dayName = strtolower((new DateTime($dateString))->format('l'));

            ksort($shifts);
            
            $sum = 0;
            $previousEndDate = null;

            foreach ($shifts as $dateTimeString => $shift) {
                $startTime = new DateTime($shift->start_time);
                $endTime = new DateTime($shift->end_time);

                if ($previousEndDate && $startTime < $previousEndDate ) {
                    $sum = $this->calculateOverlappingShifts(
                        $sum,
                        $startTime,
                        $endTime,
                        $previousEndDate
                    );

                } else {
                    $sum += $this->calculateTimeDifferenceInMinutes(
                        $startTime,
                        $endTime
                    );
                }

                $previousEndDate = $endTime;
            }

            $singleManningDTO[$dayName] = $sum;

        }

        return $singleManningDTO;
    }

    private function calculateOverlappingShifts(
        int $startingSum,
        DateTime $startTime,
        DateTime $endTime,
        DateTime $previousEndDate
    ) {
        $intersectSum = $this->calculateTimeDifferenceInMinutes(
            $startTime,
            $previousEndDate
        );

        $endSum = $this->calculateTimeDifferenceInMinutes(
            $previousEndDate,
            $endTime
        );

        return ($startingSum - $intersectSum + $endSum);
    }

    private function indexShiftsByDate($shifts)
    {
        $index = [];
        
        foreach ($shifts as $shift) {
            $date = new DateTime($shift->start_time);

            $index[$date->format('Y-m-d')][$shift->start_time.'|'.$shift->id] = $shift;
        }

        return $index;
    }

    private function calculateTimeDifferenceInMinutes(DateTime $startDate, DateTime $endDate)
    {
        $interval = $endDate->diff($startDate);

        return $interval->i + ($interval->h * 60);
    }
}
