<?php 

const SEU_CPF = '1234567890';
$seuCPF = "1234567890";

$classe = new stdClass();

class Caneta{
    // Atributos e/ou propriedades descrever  oque é para o digital
    public const PLASTICO = true; // usar public, private ou protect somente quando estão dentro de classes.
    public $nome;
    public $cor; 
    public $tipoMaterial = "Plastico";
    public $dimensoes; 
    public $tipoPonta; 

    // para ações usamos funções
    public function escrever() {

    }

    public function pintar() {
        
    }

    public function getTinta() { // get é pegar
        return false;
    }

    public function setTinta() { // set é tipo recarregar
        return true;
    }
};

echo "Hello, <b> 
                <i>
                    World!!
                </i>
            </b>
        </br>"; // tag html para quebra de linha. "b" para negrito e "i" para italico


echo "Seu CPF é de $seuCPF </br>";
echo "Seu CPF é de " . SEU_CPF . "</br>";

echo "Seu CPF é de SEU_CPF </br>";
echo "Seu CPF é de {SEU_CPF} </br>";






?>