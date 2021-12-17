<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Rodrigo Alves">
    <meta name="description" content="Exercício Tabuada PHP">
    <meta name="keybords" content="PHP, Tabuada">
    <style>
        #especial {
            color: red;
        }
    </style>

    <title> Tabuada </title>
</head>

<body>
    <h2> Exercício Tabuada </h2>

    <p>
        Criação de um algoritmo que solicita uma entrada de um número,
        e exibe uma tabuada de 0 a 10 de acordo com o número solicitado.
    </p>

    <hr>

    <form>
        <span> Insira um valor: </span>
        <input type="number" name="insercaoValor">
        <button type="submit"> Enviar </button>
    </form>

    <hr>

    <?php
    
        if (empty($_GET['insercaoValor'])) {
            echo "<b id='especial'> Insira um valor! <b>";
        } 

        else {
    
            $dadoUsuario = $_GET['insercaoValor'];
    
            for ($i = 0; $i <= 10; $i++) {
                echo $dadoUsuario . " x " . $i . " = " . $dadoUsuario * $i . "<br>";
            }
        }
    ?>

</body>

</html>