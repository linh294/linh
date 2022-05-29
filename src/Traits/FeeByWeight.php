<?php

namespace App\Traits;

trait FeeByWeight
{
    /**
     * @return float
     */
    public function feeByWeight(): float
    {
        return $this->weight * WEIGHT_COEFFICIENT;
    }
}
