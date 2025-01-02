<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendário</title>
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }

        h1{
            text-align: center;
        }

        h1:hover{
            color: blue;
        }
        .container {
            text-align: center;
        }

        .area{
            width: 80px;
        }

        .validador{
            text-align: center;
        }
    </style>
</head>
<body>
    <h1> Simulador de CALENDÁRIO</h1>
    <div class="container">
        <form action="" method="POST">
            <label for="">Data</label>
            <input class="area" type="text" name="data" placeholder="dd/mm/aaaa">
            <button type="submit" title="Clique para validar a data">Testar</button>
        </form>
    </div>
    
        <?php    
        $data = $_POST['data'] ?? null;        
        $meses30 = [4,6,9,11];
        $partes = explode('/', $data);        
        ?>
    
    <div class="validador">
        <?php
            if(count($partes) != 3){
                echo '<br>Faltam dados na digitação da data.';
                exit;
            }
            else {
                $dia = $partes[0]; 
                $mes = $partes[1]; 
                $ano = $partes[2];                 
            
                if(!is_numeric($dia) || strlen($dia) != 2){
                    echo "<br>Dia inválido.";
                    exit;
                }
                if(!is_numeric($mes) || strlen($mes) != 2){
                    echo "<br>Mês inválido.";
                    exit;
                }
                if(!is_numeric($ano) || strlen($ano) != 4){
                    echo "<br>Ano inválido.";
                    exit;
                }        
                $dia = (int)$dia;
                $mes = (int)$mes;
                $ano = (int)$ano;
                
                if($dia < 1 || $dia > 31 && $mes != 2) {
                    echo "<br>Digite uma data válida (1-31) >> " . $dia;
                    exit;
                }
                if($mes < 1 || $mes > 12) {
                    echo "<br>Digite um mês válido (1-12) >> " . $mes;
                    exit;
                }
                else {                              
                    if ($dia == 31) {
                        if(in_array($mes, $meses30)){
                            echo "<br>O mês informado não possui 31 dias";
                            exit;
                        }
                        else {
                            echo "<br>Esse mês tem 31 dias";
                        }
                    };                     
                    if ($mes == 2) {
                        if ($dia > 29) {
                            echo "<br>Fevereiro não possui mais que 29 dias.";
                            exit;
                        };

                        $bissexto = ($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0);
            
                        if ($dia <= 29 && !$bissexto) {                          
                            echo "<br>O ano fornecido não é um ano bissesto.";
                            exit;
                        }
                        else {
                            echo "<br>O ano fornecido é conisderado um ano bissesto.";                                                         
                        };    
                    };
                echo "<br> Voce forneceu a data $data ";     
                };               
            };            
        ?>
    </div>
</body>
</html>