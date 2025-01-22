<?php 

class Calculadora {
    public $valor1 = 0;
    public $valor2 = 0;
    public $operador = "";
    public $resultado = 0;

    public function __construct($num1, $num2)
    {
        $this->set($num1 , $num2);
    }

    public function set($num1, $num2)
    {
        $this->valor1 = $num1;
        $this->valor2 = $num2;
    }

    public function somar($num1, $num2) {
        $this->operador = "+";
        $this->resultado = $this->valor1 + $this->valor2;

        return $this->__toString();
    }

    public function subtrair($num1, $num2) {
        $this->valor1 = $num1;
        $this->valor2 = $num2;
        $this->operador = "-";
        $this->resultado = $this->valor1 - $this->valor2;

        return $this->__toString();
    }

    public function multiplicar($num1, $num2) {
        $this->valor1 = $num1;
        $this->valor2 = $num2;
        $this->operador = "*";
        $this->resultado = $this->valor1 * $this->valor2;

        return $this->__toString();
    }

    public function dividir($num1, $num2) {
        $this->valor1 = $num1;
        $this->valor2 = $num2;
        $this->operador = "*";
        $this->resultado = $this->valor1 * $this->valor2;

        return $this->__toString();
    }



    public function __toString()
    {
        return "O resultado de {$this->valor1} {$this->operador} {$this->valor2} é: {$this->resultado}</br>";

    }

}


$num1 = 10;
$num2 = 10;
$calculadora = new Calculadora($num1,$num2);
echo $calculadora->somar();
echo $calculadora->subtrair();
?>