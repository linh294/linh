<?php

namespace App\Traits;

trait FeeByDimension
{
    /**
     * @return float
     */
    public function feeByDimension(): float
    {
        return $this->width * $this->height * $this->depth * DIMENSION_COEFFICIENT;
    }
}
