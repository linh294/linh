<?php

namespace App;

class OrderItem
{
    /**
     * @var AbstractItem
     */
    protected $item;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @param AbstractItem $item
     */
    public function setProduct(AbstractItem $item)
    {
        $this->item = $item;
    }

    /**
     * @return AbstractItem
     */
    public function getProduct(): AbstractItem
    {
        return $this->item;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function amount(): float
    {
        return $this->item->getPrice() * $this->quantity;
    }
}
