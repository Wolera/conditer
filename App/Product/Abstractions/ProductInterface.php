<?php

namespace App\Product;

interface ProductInterface
{
    public function getPrice(): int;
    public function getExpirationDate(): int;
    public function getProductionTime(): int;
}