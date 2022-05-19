<?php

namespace PROG\DAW\PUNTOS;

class punto {
    private int $X;
    private int $Y;

    public function __construct(int $X, int $Y){
        $this->X = $X;
        $this->Y = $Y;
    }

    public static function crearPunto(int $X, int $Y){
        return new punto($X, $Y);
    }
    public function movimientoAbsoluto(){
        $this->X = $X;
        $this->Y = $Y;
    }

    public function movimientoRelativo(int $x, int $y){
        $this->x += $x;
        $this->y += $y;
    }


    public function Posicion(){
        return[
            "x" => $this->x,
            "y" => $this->y
        ];
    }

    public function copia(punto $punto){
        $coordenadas = $punto->Posicion();
        $this->Posicion($coordenadas["x"], $coordenadas["y"]);
    }

    public function distanciaPuntos(punto $punto){
        $positionB = $punto->Posicion();

        $distanciax = $positionB["x"] - $this->x;
        $distanciay = $positionB["y"] - $this->y;

        return sqrt($distanciax * $distanciax + $distanciay * $distanciay);
    }
}
?>