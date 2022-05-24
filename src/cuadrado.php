<?php

namespace PROG\DAW\POLIGONO;

class cuadrado extends poligono{
    private const MAXPOINTS = 4;
    /**
     *new cuadrado ([p1,p2,p3,p4])
     *Los puntos deben venir dados Izquierda Arriba, Derecha Arriba, Derecha Abajo, Izquierda Abajo
     * @param array $puntos
     */
    public function __construct(array $puntos){
        if (!$this->validate($puntos))
            throw new Exception("No se corresponde con un cuadrado");
        foreach ($punto as $punto){
            $this->addPoint($punto);
        }
    }

    private function Validate(array $puntos):bool{
        if (count($puntos)> CUADRADO::MAXPOINTS) return false;
        if (!$this->distanciasEntrePuntos($puntos)) return false;
        if (!self::distanciasRelativas($puntos)) return false;
        return true;
    }  

    public function distanciasEntrePuntos():bool{
        return $puntos[0].getDistance($puntos[1]);
    }

    private static function validateDistanciaPuntos($puntos):bool{
        $lado1 = $puntos[0] -> getDistance($puntos[1]);
        $lado2 = $puntos[1] -> getDistance($puntos[3]);
        $lado3 = $puntos[2] -> getDistance($puntos[3]);
        $lado4 = $puntos[3] -> getDistance($puntos[0]);
        return ($lado1 && $lado2) && ($lado2 == $lado3) && ($lado3 == $lado4);
    }

    public static function distanciasRelativas(array $puntos):bool{
        return (
            $puntos[0]->isLeft($puntos[1]) &&
            $puntos[1]->isUpper($puntos[2]) &&
            $puntos[2]->isRight($puntos[3]) &&
            $puntos[3]->isUnder($puntos[0])
        );
    }

    public function validateNewPoint():bool{
        
    }
}

?> 