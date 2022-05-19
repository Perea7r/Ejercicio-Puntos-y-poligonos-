<?php

namespace PROG\DAW\POLIGONO;

class cuadrado extends poligono{
    /**
     *new cuadrado ([p1,p2,p3,p4])
     *Los puntos deben venir dados Izquierda Arriba, Derecha Arriba, Derecha Abajo, Izquierda Abajo
     * @param array $puntos
     */
    public function __construct(array $puntos){
        if (!$this->validateNewPoint()){
            
        }
    }

    public function validateNewPoint():bool{

    }
}

?> 