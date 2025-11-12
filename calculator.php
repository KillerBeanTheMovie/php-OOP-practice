<?php 
class Calculator {
    public $numberOne;
    public $numberTwo;

    public function __construct()
        {
            $this->numberOne;
            $this->numberTwo;
        }

    public function Add(){
        return $this->numberOne + $this->numberTwo;
    }

    public function Subtract(){
        return $this->numberOne - $this->numberTwo;
    }

    public function Multiply(){
        return $this->numberOne * $this->numberTwo;
    }

    public function Divide(){
        return $this->numberOne / $this->numberTwo;
    }

}