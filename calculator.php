<?php 
class Calculator {
    public $numberOne;
    public $numberTwo;

    /*sets the initial values of these properties*/
    public function __construct()
        {
            $this->numberOne;
            $this->numberTwo;
        }

        /*adds the two numbers*/
    public function Add(){
        return $this->numberOne + $this->numberTwo;
    }
    /*subtracts the first number from the second*/
    public function Subtract(){
        return $this->numberOne - $this->numberTwo;
    }
    /*multiplies the numbers*/
    public function Multiply(){
        return $this->numberOne * $this->numberTwo;
    }
    /*divides the first number by the second one*/
    public function Divide(){
        return $this->numberOne / $this->numberTwo;
    }


}