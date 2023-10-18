<?php

namespace App\ProductionEquipment\EnumBased;

use App\Price\PriceInterface;
use App\Product\EnumBased\Product;
use App\Product\ProductInterface;
use App\Product\ProductType;
use App\ProductionEquipment\ProductionEquipmentInterface;
use App\ShelfTime\ShelfTimeInterface;

class ProductionEquipment implements ProductionEquipmentInterface
{
    private int $id;
    public function __construct(private readonly int $unitsPerHour, private ProductType $type)
    {
        $this->id = hexdec(uniqid());
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUnitsPerHour(): int
    {
        return $this->unitsPerHour;
    }

    public function getType(): string
    {
        return $this->type->toString();
    }

    public function produce(PriceInterface $price, ShelfTimeInterface $shelfTime): ProductInterface
    {
        return new Product($this->type, $price, $shelfTime);
    }
}