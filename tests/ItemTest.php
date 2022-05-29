<?php

namespace Tests;

use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase
{
    public function testConstructorSuccess()
    {
        $item = new Item(100, 10, 20, 30 , 40);

        $this->assertIsObject($item);
    }

    public function testConstructorThrowException()
    {
        $this->expectExceptionMessage('Invalid Parameters.');

        new Item(-100, 10, 20, 30 , 40);
    }

    /**
     * @dataProvider feeByWeightProvider
     */
    public function testFeeByWeight($price, $weight, $width, $height, $depth, $expected)
    {
        $item = new Item($price, $weight, $width, $height, $depth);

        $this->assertEquals($expected, $item->feeByWeight());
    }

    public function feeByWeightProvider(): array
    {
        return [
            [100, 10, 20, 30 , 40, 110]
        ];
    }

    /**
     * @dataProvider feeByDimensionProvider
     */
    public function testFeeByDimension($price, $weight, $width, $height, $depth, $expected)
    {
        $item = new Item($price, $weight, $width, $height, $depth);

        $this->assertEquals($expected, $item->feeByDimension());
    }

    public function feeByDimensionProvider(): array
    {
        return [
            [100, 10, 20, 30 , 40, 264000]
        ];
    }

    /**
     * @dataProvider shippingFeeProvider
     */
    public function testShippingFee($price, $weight, $width, $height, $depth, $expected)
    {
        $item = new Item($price, $weight, $width, $height, $depth);

        $this->assertEquals($expected, $item->shippingFee());
    }

    public function shippingFeeProvider(): array
    {
        return [
            [100, 100000, 20, 30 , 40, 1100000],
            [100, 10, 20, 30 , 40, 264000]
        ];
    }
}
