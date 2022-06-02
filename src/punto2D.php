<?php
namespace DAW\PROG\PUNTO2D;
use DAW\PROG\PUNTO\puntoV2;
use PROG\DAW\PUNTOS\punto;

class punto2D implements punto{
    private int $x;
    private int $y;

    public function __construct(int $x, int $y){
        $this->x = $x;
        $this->y = $y;
    }

    static public function create(int $x, int $y){
        return new punto2d($x, $y);
    }

    public function move(int $valor, int $dimension){
        $this->x = $x;
        $this->y = $y;
    }

    public function getX():int{
        return $this->x;
    }

    public function getY():int{
        return $this->y;
    }

    
    public function getPosition():array{
        return [$this->getX(), $this->getY()];
    }


    public function moveTo(int $x, int $y){
        $this->x += $x;
        $this->y += $y;
    }

    public function moveToPoint(punto $punto){
        [$x,$y] = $p->getPosition();
        $this->moveTo($x, $y) - $px;
        $this->moveTo($x, $y) - $py;
        return sqrt($x**2+$y**2);
    }

    public function isUpper(punto $p){
        [$px, $py] = $p->getPosition();
        return ($this->y < $py && $this->x == $px);
    }
    public function isUnder(punto $p){
        [$px, $py] = $p->getPosition();
        return ($this->y > $py && $this->x == $px);
    }
    public function isLeft(punto $p){
        [$px, $py] = $p->getPosition();
        return ($this->x > $px && $this->y == $py);
    }
    public function isRight(punto $p){
        [$px, $py] = $p->getPosition();
        return ($this->x < $px && $this->y == $py);
    }
    public function isUpperLeft(punto $p){
        [$px, $py] = $p->getPosition();
        return ($this->x > $px && $this->y < $p);
    }
    public function isUpperRight(punto $p){
        [$px, $py] = $p->getPosition();
        return ($this->x < $px && $this->y < $p);
    }
    public function isUnderRight(punto $p){
        [$px, $py] = $p->getPosition();
        return ($this->x < $px && $this->y > $p);
    }
    public function isUnderLeft(punto $p){
        [$px, $py] = $p->getPosition();
        return ($this->x > $px && $this->y > $p);
    }
}
?>