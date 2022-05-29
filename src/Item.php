<?php

namespace App;

use App\Contracts\FeeableByDimension;
use App\Contracts\FeeableByWeight;
use App\Traits\FeeByDimension;
use App\Traits\FeeByWeight;

class Item extends AbstractItem implements FeeableByWeight, FeeableByDimension
{
    use FeeByWeight, FeeByDimension;

    /**
     * @return float
     */
    public function shippingFee(): float
    {
        return max($this->feeByWeight(), $this->feeByDimension());
    }
}
