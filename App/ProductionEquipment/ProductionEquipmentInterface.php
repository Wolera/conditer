<?php

namespace App\ProductionEquipment;

use App\Product\ProductInterface;

interface ProductionEquipmentInterface
{
    public function getId(): int;
    public function getUnitsPerHour(): int;
    public function produce(): ProductInterface;
}