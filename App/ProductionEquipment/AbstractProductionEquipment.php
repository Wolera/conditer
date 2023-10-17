<?php

namespace App\ProductionEquipment;

use App\Exceptions\NoThisProductTypeException;
use App\Product\AbstractProduct;

abstract class AbstractProductionEquipment implements ProductionEquipmentInterface
{
    public function __construct(private readonly int $unitsPerHour)
    {
//        if(!is_subclass_of($class, AbstractProduct::class)) {
//            throw new NoThisProductTypeException();
//        }
    }

    public function getUnitsPerHour(): int
    {
        return $this->unitsPerHour;
    }
}