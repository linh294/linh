<?php

namespace App\Contracts;

interface FeeableByWeight
{
    /**
     * @return float
     */
    public function feeByWeight(): float;
}
