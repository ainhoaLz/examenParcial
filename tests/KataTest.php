<?php

namespace ainhoa\ExamenParcial\Test;

use ainhoa\ExamenParcial\ExamenKata;
use PHPUnit\Framework\TestCase;

class KataTest extends TestCase
{
    private ExamenKata $kata;
    protected function setUp(): void
    {
        parent::setUp();
        $this->kata = new ExamenKata();
    }
    /**
     * @test
     */
    public function givenTwoNumbersReturnsSumOfNumbers()
    {
        $result = $this->kata->sum(1, 2);

        $this->assertEquals(3, $result);

    }

    /**
     * @test
     */
    public function givenNegativeNumberThrowsException()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Negativos no soportados');

        $this->kata->sum(-1, 2);

    }


}