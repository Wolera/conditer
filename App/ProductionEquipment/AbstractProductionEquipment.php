<?php

namespace App\ProductionEquipment;

use App\Exceptions\NoThisProductTypeException;
use App\Product\Abstractions\AbstractProduct;
use App\Product\Abstractions\ProductInterface;

abstract class AbstractProductionEquipment implements ProductionEquipmentInterface
{
    /**
     * @throws NoThisProductTypeException
     */
    public function __construct(
        protected readonly int $unitsPerHour,
        protected readonly string $class,
        protected readonly int $price,
        protected readonly int $shelfTimeHours
    )
    {
        if(!is_subclass_of($class, AbstractProduct::class)) {
            throw new NoThisProductTypeException;
        }
    }

    public function getUnitsPerHour(): int
    {
        return $this->unitsPerHour;
    }

    public function produce(): ProductInterface
    {
        /**  */

        new $this->class($this->price, $this->shelfTimeHours);
    }
}