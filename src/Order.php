<?php

namespace App;

class Order
{
    /**
     * @var OrderItem[]
     */
    protected $orderItems;

    /**
     * @return OrderItem[]
     */
    public function getOrderItems(): array
    {
        return $this->orderItems;
    }

    /**
     * @param OrderItem[] $orderItems
     */
    public function setOrderItems(array $orderItems)
    {
        $this->orderItems = $orderItems;
    }

    /**
     * @return float
     */
    public function totalAmount(): float
    {
        return array_reduce($this->orderItems, function ($carry, OrderItem $item) {
            return $carry + $item->amount();
        }, 0);
    }
}
