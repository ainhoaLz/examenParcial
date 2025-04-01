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
    public function givenAñadirInstructionCompletaReturnsProductAndCuantity()
    {
        $result = $this->listaCompra->gestionarListaCompra('añadir pan 2');

        $this->assertEquals('pan x2', $result);

    }

//    /**
//     * @test
//     */
//    public function givenNegativeNumberThrowsException()
//    {
//        $this->expectException(\Exception::class);
//        $this->expectExceptionMessage('Negativos no soportados');
//
//        $this->listaCompra->sum(-1, 2);
//
//    }


}