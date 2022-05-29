<?php

namespace App;

use RuntimeException;

abstract class AbstractItem
{
    /**
     * @var float
     */
    protected $price;

    /**
     * @var float
     */
    protected $weight;

    /**
     * @var float
     */
    protected $width;

    /**
     * @var float
     */
    protected $height;

    /**
     * @var float
     */
    protected $depth;

    public function __construct($price, $weight, $width, $height, $depth)
    {
        if ($price <= 0 || $weight <= 0 || $width <= 0 || $height <= 0 || $depth <= 0) {
            throw new RuntimeException('Invalid Parameters.');
        }

        $this->price = $price;
        $this->weight = $weight;
        $this->width = $width;
        $this->height = $height;
        $this->depth = $depth;
    }

    /**
     * @return float
     */
    abstract public function shippingFee(): float;

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price + $this->shippingFee();
    }
}
