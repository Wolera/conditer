<?php
spl_autoload_register(function ($class) {
    $path = ROOT . DELIMETER . str_replace('\\', DELIMETER, $class) . '.php';
//    echo $class;
//    echo '<br/>';
//    echo $path;
//    exit();
    if(file_exists($path)) {
        require $path;
    }
});