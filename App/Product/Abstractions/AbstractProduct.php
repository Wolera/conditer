<?php

namespace App\Product\Abstractions;

abstract class AbstractProduct implements ProductInterface
{
    protected int $productionTime;
    protected readonly string $type;
    public function __construct(protected int $price, protected int $shelfLifeHours)
    {
        $this->productionTime = time();

        $this->type = $this->initiateType();
    }

    private function initiateType(): string
    {
        $array = explode('\\', $this::class);

        return lcfirst(end($array));
    }

    public function getType(): string
    {
        return $this->type;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    public function getShelfLifeHours(): int
    {
        return $this->shelfLifeHours;
    }

    public function getProductionTime(): int
    {
        return $this->productionTime;
    }
}