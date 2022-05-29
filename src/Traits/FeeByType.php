<?php

namespace App\Traits;

trait FeeByType
{
    /**
     * @return float
     */
    public function feeByType(): float
    {
        return $this->weight * $this->width * $this->height * $this->depth; // sample
    }
}
