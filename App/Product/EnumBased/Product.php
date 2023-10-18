<?php

namespace App\Product\EnumBased;

use App\Price\PriceInterface;
use App\Product\ProductInterface;
use App\Product\ProductType;
use App\ShelfTime\ShelfTimeInterface;

class Product implements ProductInterface
{
    private int $productionTime;
    public function __construct(
        private readonly ProductType $type,
        private PriceInterface $price,
        private ShelfTimeInterface $shelfTime
    ){
        $this->productionTime = time();
    }

    public function getType(): string
    {
        return $this->type->toString();
    }

    public function getPrice(): PriceInterface
    {
        return $this->price;
    }

    public function getShelfTime(): ShelfTimeInterface
    {
        return $this->shelfTime;
    }

    public function getProductionTime(): int
    {
        return $this->productionTime;
    }
}