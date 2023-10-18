<?php

namespace App\Price;

interface PriceInterface
{
    public function value(): int;
    public function string(): string;
}