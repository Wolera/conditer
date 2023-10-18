<?php

namespace App\Product\Abstractions;

interface ProductInterface
{
    public function getType(): string;
    public function getPrice(): int;
    public function getShelfLifeHours(): int;
    public function getProductionTime(): int;
}