<?php

namespace App\Contracts;

interface FeeableByType
{
    /**
     * @return float
     */
    public function feeByType(): float;
}
