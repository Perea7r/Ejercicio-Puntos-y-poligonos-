<?php

namespace PROG\DAW\POLIGONO;

class poligono {
    protected array $puntos;

    public function __construct(array $puntos){
        $this-> puntos = $puntos;
    }

    public function ObtenerPuntos(){
        return $this->$puntos;
    }
}
?>