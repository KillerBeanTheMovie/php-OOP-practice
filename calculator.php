<?php 
class Calculator {
    public $numberOne;
    public $numberTwo;

    /*initializes the object using external input and assigns values */
    public function __construct($numOne, $numTwo)
        {
            $this->numberOne = $numOne;
            $this->numberTwo = $numTwo;
        }

        /*adds the two numbers*/
    public function Add(){
        return $this->numberOne + $this->numberTwo;
    }
    /*subtracts the second number from the first*/
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

/*creates a new object and stores the first and second numbers entered from the form*/
$numbers = new Calculator($_POST['first'], $_POST['second'] );

/*outputs the result if the button's value matches the condition*/
if($_POST['operator'] === 'sub') {
    echo $numbers->Subtract();
} elseif($_POST['operator'] === 'add') {
    echo $numbers->Add();
} elseif($_POST['operator'] === 'mult') {
    echo $numbers->Multiply();
} elseif($_POST['operator'] === 'divide') {
    echo $numbers->Divide();
}