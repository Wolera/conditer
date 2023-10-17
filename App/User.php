<?php

namespace App;

class User
{
    public function hello(): void
    {
        echo 'hello';
    }

    public function time(): int
    {
        return time();
    }
}