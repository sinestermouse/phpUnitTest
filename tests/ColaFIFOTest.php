<?php


use PHPUnit\Framework\TestCase;

class ColaFIFOTest extends TestCase
{
    /** @test */
    public function pushElementInArray()
    {
        $cola = new ColaFifo;
        $cola->push("Elemento");
        $this->assertSame(1, $cola->count());
    }

    /** @test */
    public function pullElementInArray()
    {
        $cola = new ColaFifo;
        $cola->push("Elemento");
        $cola->pull();
        $this->assertSame(0, $cola->count());
    }

    /** @test */
    public function countElementInArray()
    {
        $cola = new ColaFifo;
        $cola->push("Elemento1");
        $cola->push("Elemento2");
        $cola->push("Elemento3");
        $this->assertSame(3, $cola->count());
    }

    /** @test */
    public function masivePushInArray()
    {
        $cola = new ColaFifo;
        for ($i=0; $i<1000; $i++){
            $cola->push($i);
        }
        $this->assertSame(1000, $cola->count());
    }

    /** @test */
    public function masivePullInArray()
    {
        $cola = new ColaFifo;
        for ($i=0; $i<1000; $i++){
            $cola->push($i);
        }
        for ($i=0; $i<1000; $i++){
            $cola->pull();
        }

        $this->assertSame(0, $cola->count());
    }

    /** @test */
    public function pullInArrayEmpty()
    {
        $cola = new ColaFifo;
        $cola->pull();
        $this->assertSame(0, $cola->count());
    }
}
