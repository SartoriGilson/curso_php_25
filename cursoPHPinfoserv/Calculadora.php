<?php 

$numero1 = 50;
$numero2 = 2;
$operador = "#";


if ($operador == "+") {
    $soma = $numero1 + $numero2;
    echo "A soma dos valores $numero1 com $numero2 é igual a $soma";
}
elseif ($operador == "-") {
    $subtracao = $numero1 - $numero2;
    echo "A subtração dos valores $numero1 com $numero2 é igual a $subtracao";
}
elseif ($operador == "*") {
    $multiplicacao = $numero1 * $numero2;
    echo "A multiplicação dos valores $numero1 com $numero2 é igual a $multiplicacao";
} 
elseif ($operador == "/") {
    if ($numero2 == 0) {
        echo "Divisão inválida";
    } else {
        $divisao = $numero1 / $numero2;
        echo "A divisão do valores $numero1 por $numero2 é igual a $divisao";
    }        
}
elseif ($operador == "#") {
    $percentual = $numero1 * ($numero2 / 100);
    echo "$numero2% de $numero1 é $percentual";
}
else {
    echo "Operador inválido";
} 

// triangulo dado tres medidas informadas pelos usuario diga qual é o tipo do triangulo



$comp_1 = 1;
$comp_2 = 2;
$comp_3 = 7;

// as soma de dois segmentos de triangulo tem que ser maior que o terceiro segmento.
if ($comp_1 < ($comp_2 + $comp_3) && $comp_2 < ($comp_1 + $comp_3) && $comp_3 < ($comp_1 + $comp_2)) { // formula para calcular se é possivel ser um triangulo
    if ($comp_1 == $comp_2 && $comp_2 == $comp_3) {
        echo "<br> Com os valores informados temos um triângulo EQUILÁTERO.";
    } 
    elseif ($comp_1 == $comp_2 || $comp_1 == $comp_3 || $comp_2 == $comp_3) {
        echo " <br> Com os valores informados temos um triângulo ISÓSCELES.";
    } 
    else {
        echo "<br> Com os valores informados temos um triângulo ESCALENO.";
    }
} 
else {
    echo "<br> As medidas fornecidas não podem formar um triângulo.";
}


/** 
 * criar um algoritimo que simula o funcionamento do calendario.
 * variaveis: $data = '01/01/2025'
 * validar a data e mes e ser ano foe bixesto
 * Dica: if else,
 * */ 

 $data = '01/01/2025';

 $dia = substr($data, 0, 2);
 $mes = substr($data, 3, 2);
 $ano = substr($data, 6, 2);

 

?>



