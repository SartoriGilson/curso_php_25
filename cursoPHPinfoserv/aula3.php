<?php 

const SEU_CPF = '1234567890';
$seuCPF = "1234567890";

    class Caneta{
        // Atributos e/ou propriedades
        public const PLASTICO = true; // usar public, private ou protect somente quando estão dentro de classes.
        public $nome;
        public $cor; 
        public $tipoMaterial = "Plastico";
        public $dimensoes; 
        public $tipo; 

        // para ações usamos funções
        public function escrever() {
        }

        public function pintar() {

        }
    };

echo "Hello, <b>World!!</b></br>"; // tag html para quebra de linha.


echo "Seu CPF é de $seuCPF </br>";
echo "Seu CPF é de " . SEU_CPF . "</br>";

echo "Seu CPF é de SEU_CPF </br>";
echo "Seu CPF é de {SEU_CPF} </br>";



// fazer a tabuada e mostrar na tela de tema de casa.





?>