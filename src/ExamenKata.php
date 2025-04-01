<?php

namespace ainhoa\ExamenParcial;
use PHPUnit\Util\Exception;

class ExamenKata
{
    public function sum(int $number1, int $number2) : int
    {
        if($number1 < 0 || $number2 < 0) {
            throw new Exception("Negativos no soportados");
        }
        return $number1 + $number2;
    }
}