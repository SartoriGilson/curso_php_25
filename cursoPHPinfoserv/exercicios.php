
<?php 
/*
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

$numero = 11;

if (ehPrimo($numero)) {
    echo "O número $numero é primo.<br>";
} else {
    echo "O número $numero não é primo.<br>";
}



// Recriar o exercicio da tabuada utilizando funções

$numero = 7;   
    
function tabuada($num) {
    for ($i = 0; $i <= 10; $i++) {
        $resposta = $i * $num;
        echo "$i x $num = $resposta</br>";
    };
}; 

tabuada($numero);      
/*
// Encontrar os primeiros 10 numeros pares e os 10 primeiros numeros impares

function ParImpar($escolha) {
    if ($escolha != "par" && $escolha != "impar") {
        echo "Erro - Verifique a digitação 'par ou impar'";
        exit;
    }
    else {
        for ($i = 0; $i < 20; $i++) {
            if ($escolha == "par") {
                if ($i % 2 == 0) {
                    echo "Os números pares são: " . $i . "<br>";
                }
            }
            elseif ($escolha == "impar") {
                if ($i % 2 == 1) {
                    echo "Os números impares são: " . $i . "<br>";
                }
            }    
        }
    }
}

ParImpar("par")

*/

// encontrar os 10 primeiros numeros primos a partir do 10

function primeirosPrimos ($inicio, $quantidade) {
    $primos = [];
    $numero = $inicio;

    while (count($primos) < $quantidade) {
        if (ehPrimo($numero)) {
            $primos[] = $numero;
        }
        $numero++;
    }

    return $primos;
}

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

$inicio = 10;
$quantidade = 10;
$resultado = primeirosPrimos($inicio, $quantidade);

echo implode(' ', $resultado);




// Ordenar em ordem crescente o array [ 10,5,2,30,85,14] não utilizar funções nativas
?>
