<?php

namespace ainhoa\ExamenParcial;
use PHPUnit\Util\Exception;

class ListaCompraKata
{
    public array $listaCompra;
    public function gestionarListaCompra(string $action) : string
    {
        $actionSplit = explode(' ', strtolower($action));
        if($actionSplit[0] == 'añadir') {
            //compruebo si ese producto ya esta en la lista
//            if(in_array($actionSplit[1], $this->listaCompra)) {
//                //sumar producto
//            }
            return $actionSplit[1] . ' x' . $actionSplit[2];
        }
       if($actionSplit[0] == 'eliminar') {
           if(!in_array($actionSplit[1], $this->listaCompra)) {
               return 'El producto seleccionado no existe';
           }
           $this->listaCompra = array_diff($this->listaCompra, [$actionSplit[1]]);
       }
       return '';
    }
//    public function sum(int $number1, int $number2) : int
//    {
//        if($this->isNegativeNumber($number1) || $this->isNegativeNumber($number2)) {
//            throw new Exception("Negativos no soportados");
//        }
//        return $number1 + $number2;
//    }
//
//    /**
//     * @param int $number1
//     * @return bool
//     */
//    public function isNegativeNumber(int $number1): bool
//    {
//        return $number1 < 0;
//    }
//
//    /*
//*       'player1' == $playerName ? $this->player1Score++ : $this->player2Score++;
//        if('player1' == $playerName){
//            $this->player1Score++;
//            return;
//        }
//        $this->player2Score++;
//     */
}