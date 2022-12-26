<?php

    $cor = $_POST["color"];
    if (isset($cor)) { ?>
        <style> 
            body {
                background-color: <?php echo $cor ?>
            } 
        </style><?php
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mudar cor - PHP</title>
    <style>
        h1 {
            text-align: center;
            color: white;
        }

        div {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <H1>SITE QUE MUDA COR</H1>
    <div>
    <form action="index.php" method="post">
        <button name="color" value="green">Verde</button>
        <button name="color" value="red">Vermelho</button>
        <button name="color" value="blue">Azul</button>
        <button name="color" value="yellow">Amarelo</button>
        <button name="color" value="orange">Laranja</button>
        <button name="color" value="purple">Roxo</button>
    </form></div>
</body>
</html>