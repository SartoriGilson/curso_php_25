<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $numero = 8;   
    ?>
    <h1>Calculando a tabuada do <?php echo $numero?></h1>
    <div class="resultado">
        <?php 
            function tabuada($num) {
                for ($i = 0; $i <= 10; $i++) {
                    $resposta = $i * $num;
                    echo "$i x $num = $resposta</br>";
                };
            };                  
            tabuada($numero);      
        ?>           
    </div>   
</body>
</html>