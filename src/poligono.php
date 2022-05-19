<?php

namespace PROG\DAW\POLIGONO;
use PROG\DAW\PUNTO\puntov2;

abstract class poligono{
    const MINPOINTS = 3;
    private array $puntos = [];
    private int $numPuntos=0;
    abstract public function getArea() :float;
    abstract static function create(array $puntos);
    abstract public function validateNewPoint():bool;
    abstract public function getMaxPoints();

    public function getNumPoints() :int{
        return count($this->puntos);
    }

    protected function addPoint(punto $p){
        if (!$this->validateNewPoint())
            throw new \Exception("No puedo añadir un nuevo punto: Max Points" . $this->getMaxPoints());
        $this->puntos[] = $p;
        $this->numPuntos++;
    }
}
?>