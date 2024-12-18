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



?>



