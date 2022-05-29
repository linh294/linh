<?php

namespace App\Contracts;

interface FeeableByDimension
{
    /**
     * @return float
     */
    public function feeByDimension(): float;
}
