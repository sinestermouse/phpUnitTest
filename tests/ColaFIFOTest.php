<?php
use PHPUnit\Framework\TestCase;

class ColaFIFOTest extends TestCase {
    
    /**
     * @covers
     */
    public function testDebeRetornarElPrimerElementoIngresado(){
        $cola = new ColaFIFO;
        $cola->push("uno");
        $cola->push("dos");

        $elemento = $cola->pull();

        $this->assertEquals("dos", $elemento);
    }

    /**
     * @covers
     */
    public function testIniciaLaColaVacia(){
        $cola = new ColaFIFO;

        $items = $cola->count();

        $this->assertEquals(0, $items);
    }
}