<?php

namespace App\ProductionEquipment;

use App\Product\Abstractions\ProductInterface;

interface ProductionEquipmentInterface
{
    public function getId(): int;
    public function getUnitsPerHour(): int;
    public function produce(): ProductInterface;
}