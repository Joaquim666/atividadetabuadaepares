<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Números pares</title>
</head>
<body>
    <h1>Números pares</h1>
    <?php
    for ($par=0; $par<=500; $par++){
        if (($par % 2 == 1) and ($par < 500)){
            continue;
        }elseif ($par <=500) {
            echo $par . " - ";
        }else{
            break;
        }
    }

    ?>
    
</body>
</html>