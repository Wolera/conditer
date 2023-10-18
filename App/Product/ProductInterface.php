<?php

namespace App\Product;

use App\Price\PriceInterface;
use App\ShelfTime\ShelfTimeInterface;

interface ProductInterface
{
    public function getType(): string;
    public function getPrice(): PriceInterface;
    public function getShelfTime(): ShelfTimeInterface;
    public function getProductionTime(): int;
}