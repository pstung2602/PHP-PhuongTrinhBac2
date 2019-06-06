<?php
class quadraticEquation
{
    public $a;
    public $b;
    public $c;
    function __construct($a,$b,$c){
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
        $this->delta=$this->b**2-4*$this->a*$this->c;
        $this->r1=((-$this->b+pow($this->delta,0.5)))/(2*$this->a);
        $this->r2=(-$this->b-pow($this->delta,0.5))/(2*$this->a);
    }
    function get_a(){
        return $this->a;
    }
    function get_b(){
        return $this->b;
    }
    function get_c(){
        return $this->c;
    }
    function getDiscriminant() {
        return $this->delta;
    }
    function getRoot1(){
        if($this->delta>0){
            return $this->r1;
        }else if($this->delta==0){
            throw new Exception("The equation has only one root is".$this->r1);
        }
        else{
            throw new Exception("The equation has no roots");
        }
    }
    function getRoot2(){
        if($this->delta>0){
            return $this->r2;
        }else if($this->delta==0){
            throw new Exception("The equation has only one root is ".$this->r1);
        }
        else{
            throw new Exception("The equation has no roots");
        }
    }
}
