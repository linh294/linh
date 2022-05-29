<?php

namespace App;

use App\Contracts\FeeableByDimension;
use App\Contracts\FeeableByType;
use App\Contracts\FeeableByWeight;
use App\Traits\FeeByDimension;
use App\Traits\FeeByType;
use App\Traits\FeeByWeight;

class Smartphone extends AbstractItem implements FeeableByWeight, FeeableByDimension, FeeableByType
{
    use FeeByWeight, FeeByDimension, FeeByType;

    /**
     * @return float
     */
    public function shippingFee(): float
    {
        return max($this->feeByWeight(), $this->feeByDimension(), $this->feeByType());
    }
}
