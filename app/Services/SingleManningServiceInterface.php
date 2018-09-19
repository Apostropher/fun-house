<?php

namespace App\Services;

use App\Rota;
use App\Models\SingleManningInterface as SingleManningModelInterface;

interface SingleManningServiceInterface
{
    public function calculate(Rota $rota): SingleManningModelInterface;
}
