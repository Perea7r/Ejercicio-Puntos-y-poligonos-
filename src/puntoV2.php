<?php

namespace DAW\PROG\PUNTO;

interface puntoV2 {

    /**
     * Move (int $valor, string $dimension)
     *
     * @param integer $x
     * @param integer $y
     * @param string $dimension
     * 
     */

    public function move(int $valor, int $dimension);
    public function moveTo(int $x, int $y);
    public function moveToPoint(punto $punto);
    public function getPosition():array;
    public function toDistance();
}


?>