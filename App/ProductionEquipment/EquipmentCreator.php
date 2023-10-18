<?php

namespace App\ProductionEquipment;

use App\Product\ProductType;
use App\ProductionEquipment\EnumBased\ProductionEquipment;

class EquipmentCreator
{
    public function fromEnum(int $unitsPerHour, ProductType $type): ProductionEquipmentInterface
    {
        return new ProductionEquipment($unitsPerHour, $type);
    }
}