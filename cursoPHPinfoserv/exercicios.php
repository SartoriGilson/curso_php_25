
<?php 

// Exercicio 1:
// Atribuir um valor para uma variavel chamada numero evamos informar ao usuario se este numero é par ou impar.

$numero = 7;

if($numero % 2 == 0) {
    echo "O número " . $numero . " informado é par.<br>";
} else {
    echo "O número " . $numero . " informado é impar.<br>";
}

// Exercicio 2:
// Dado um numero informado pelo usuario e se ele é um numero primo



function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}

// Receber o número informado
$numero = 11;

// Verificar se é primo
if (ehPrimo($numero)) {
    echo "O número $numero é primo.<br>";
} else {
    echo "O número $numero não é primo.<br>";
}

?>
