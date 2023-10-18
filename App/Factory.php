<?php

namespace App;

use App\Price\Price;
use App\Product\ProductInterface;
use App\ProductionEquipment\EquipmentCreator;
use App\ProductionEquipment\ProductionEquipmentInterface as Equipment;
use App\ShelfTime\ShelfTime;

class Factory
{
    /**
     * @var $equipmentStorage Equipment[]
     */
    private array $equipmentStorage = [];
    /**
     * @var ProductInterface[]
     */
    private array $productStorage = [];
    public function addEquipment(Equipment $equipment): static
    {
        $this->equipmentStorage[spl_object_hash($equipment)] = $equipment;

        return $this;
    }

    public function runFor(int $hours): static
    {
        array_walk($this->equipmentStorage, function (Equipment $equipment) use ($hours) {
            $this->runEquipmentFor($equipment, $hours);
        });

        return $this;
    }

    private function runEquipmentFor(Equipment $equipment, int $hours): void
    {
        $totalUnitsNumber = $equipment->getUnitsPerHour() * $hours;
        for($i = 0; $i < $totalUnitsNumber; $i ++) {
            $this->equipmentStorage[] = $equipment->produce(new Price(rand(10, 20)), ShelfTime::fromHours(rand(10, 20)));
        }
    }
}