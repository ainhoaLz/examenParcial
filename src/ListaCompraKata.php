<?php

namespace ainhoa\ExamenParcial;
use PHPUnit\Util\Exception;

class ListaCompraKata
{
    public array $listaCompra = ['pan x2'];
    public function gestionarListaCompra(string $action) : string
    {
        $actionSplit = explode(' ', strtolower($action));

        if(!isset($actionSplit[2])){
            $actionSplit[2] = 1;
        }

        if($actionSplit[0] == 'añadir') {
            if(empty($this->listaCompra)) {
                $this->listaCompra[] = $actionSplit[1] . ' x' . $actionSplit[2];
                return $this->getRespuesta();
            }
            foreach ($this->listaCompra as $producto) {
                if(str_contains($producto, $actionSplit[1])) {
                    $this->listaCompra[] = $actionSplit[1] . ' x' . ($actionSplit[2] + intval(substr($producto, -1)));
                    $this->listaCompra = array_diff($this->listaCompra, array($producto));
                }
            }
            return $this->getRespuesta();
        }

       if($actionSplit[0] == 'eliminar') {
           if(!in_array($actionSplit[1], $this->listaCompra)) {
               return 'El producto seleccionado no existe';
           }
           $this->listaCompra = array_diff($this->listaCompra, [$actionSplit[1]]);
       }
       return '';
    }

    /**
     * @return string
     */
    public function getRespuesta(): string
    {
        $respuesta = '';
        if(empty($this->listaCompra))
        {
            return $respuesta;
        }
        foreach ($this->listaCompra as $producto) {
            $respuesta .= $producto . ', ';
        }
        return substr($respuesta, 0, -2);
    }
}