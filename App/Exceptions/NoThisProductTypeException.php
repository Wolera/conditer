<?php

namespace App\Exceptions;

class NoThisProductTypeException extends \Exception
{
    protected $message = 'This Product Type doesn\'t exist';
}