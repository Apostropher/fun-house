<?php

namespace App\Models;

use Aedart\Dto;

class SingleManning extends Dto implements SingleManningInterface
{
    protected $monday = 0;

    protected $tuesday = 0;

    protected $wednesday = 0;

    protected $thursday = 0

    protected $friday = 0;

    protected $saturday = 0;

    protected $sunday = 0;

    public function getMonday(): ?int
    {
        return $this->monday;
    }

    public function setMonday(?int $monday)
    {
        $this->monday = $monday;
    }

    public function getTuesday(): ?int
    {
        return $this->tuesday;
    }

    public function setTuesday(?int $tuesday)
    {
        $this->tuesday = $tuesday;
    }

    public function getWednesday(): ?int
    {
        return $this->wednesday;
    }

    public function setWednesday(?int $wednesday)
    {
        $this->wednesday = $wednesday;
    }

    public function getThursday(): ?int
    {
        return $this->thursday;
    }

    public function setThursday(?int $thursday)
    {
        $this->thursday = $thursday;
    }

    public function getFriday(): ?int
    {
        return $this->friday;
    }

    public function setFriday(?int $friday)
    {
        $this->friday = $friday;
    }

    public function getSaturday(): ?int
    {
        return $this->saturday;
    }

    public function setSaturday(?int $saturday)
    {
        $this->saturday = $saturday;
    }

    public function getSunday(): ?int
    {
        return $this->sunday;
    }

    public function setSunday(?int $sunday)
    {
        $this->sunday = $sunday;
    }
}