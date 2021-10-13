<?php

class ColaFifo {
    
    protected $items = [];

    public function push($elemento) {
        array_push($this->items, $elemento);
    }

    public function count() {
        return count($this->items);
    }

    public function pull() {
        return array_pop($this->items);
    }

}