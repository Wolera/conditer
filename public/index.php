<?php
require '../helpers.php';
require '../autoload.php';

$user = new \App\User();
$user->hello();
echo $user->time();
