<?php

namespace ainhoa\ExamenParcial\Test;

use ainhoa\ExamenParcial\ListaCompraKata;
use PHPUnit\Framework\TestCase;

class ListaCompraKataTest extends TestCase
{
    private ListaCompraKata $listaCompra;
    protected function setUp(): void
    {
        parent::setUp();
        $this->listaCompra = new ListaCompraKata();
    }

    /**
     * @test
     */
//    public function givenAñadirInstructionCompletaReturnsProductAndQuantity()
//    {
//        $result = $this->listaCompra->gestionarListaCompra('añadir pan 2');
//
//        $this->assertEquals('pan x2', $result);
//
//    }

    /**
     * @test
     */
    public function givenAñadirInstructionAndProductAlreadyExistsReturnsProductWithSumOfQuantities()
    {
        $result = $this->listaCompra->gestionarListaCompra('añadir pan 1');

        $this->assertEquals('pan x3', $result);

    }


}