<?php
include __DIR__ . '/public/index.php';

use App\Factory;
use App\Product\ProductType;
use App\ProductionEquipment\EquipmentCreator;

$factory = new Factory();
$creator = new EquipmentCreator();

$factory
    ->addEquipment($creator->fromEnum(1, ProductType::ICE_CREAM))
    ->addEquipment($creator->fromEnum(1, ProductType::ICE_CREAM))
    ->addEquipment($creator->fromEnum(1, ProductType::ICE_CREAM))
    ;

$factory
    ->addEquipment($creator->fromEnum(2, ProductType::CHOCOLATE))
    ->addEquipment($creator->fromEnum(2, ProductType::CHOCOLATE));

$factory
    ->addEquipment($creator->fromEnum(3, ProductType::CAKE));


