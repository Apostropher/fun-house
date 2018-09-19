<?php

namespace App\Models;

use Aedart\Dto;

interface SingleManningInterface
{
    public function getMonday(): ?int;

    public function setMonday(?int $monday);

    public function getTuesday(): ?int;

    public function setTuesday(?int $tuesday);

    public function getWednesday(): ?int;

    public function setWednesday(?int $wednesday);

    public function getThursday(): ?int;

    public function setThursday(?int $thursday);

    public function getFriday(): ?int;

    public function setFriday(?int $friday);

    public function getSaturday(): ?int;

    public function setSaturday(?int $saturday);

    public function getSunday(): ?int;

    public function setSunday(?int $sunday);
}