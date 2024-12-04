<?php 

const SEU_CPF = '00978964039';
$seuCPF = "00978964039";

    class Caneta{
        // Atributos e/ou propriedades
        public const PLASTICO = true;
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

echo "Hello, <b>World!!</b><br/>"; // tag html para quebra de linha.
echo "Seu CPF é de $seuCPF";
echo "Seu CPF é de " . SEU_CPF;

// fazer a tabuada e mostrar na tela de tema de casa.

?>