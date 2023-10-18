<?php

namespace App\Price;

class Price implements PriceInterface
{
    public function __construct(private readonly int $value)
    {
    }

    public function value(): int
    {
        return $this->value;
    }

    public function string(): string
    {
        return 'R' . $this->value;
    }
}