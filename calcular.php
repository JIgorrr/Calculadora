<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Resultado - CALC</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90vh;
            background-color: tomato;
            
        }

        .card_1 {
            background-color: cadetblue;
            padding: 88px;
            text-transform: uppercase;
            border-radius: 20px;
            

        }

        .card_2 {
            background-color: turquoise;
            height: 10vh;
        }

        a {
            text-decoration: none;
            margin-left: 25px;
            color: white;
            Background-color: turquoise;
            padding: 5px;
            border-radius: 20px;
            cursor: pointer;
            
        }

        a:hover {
            background-color: rgb(53, 238, 207);
        }

    </style>
</head>

<body>

<section>

<div class="card_1">
<?php

require_once "calculadora.php";

$n1 = $_POST["fastNumber"];
$n2 = $_POST["secondNumber"];
$op = $_POST["operacao"];

$calculadora = new Calculadora();

$calculadora -> setNumero01($n1);
$calculadora -> setNumero02($n2);

switch($op) {
    case "Somar":
        $calculadora->somar();
        break;
    case "Subtrair":
        $calculadora->subtrair();
        break;
    case "Multiplicar":
        $calculadora->multiplicar();
        break;
    case "Dividir":
        $calculadora->divisao();
        break;
}

echo "Resultado = ".$calculadora->getTotal();
echo "<br><br>";


echo "<a href=\"javascript:history.go(-1)\">VOLTAR</a>";


?>
</div>
</section>

</body>


<section class="card_2">
    <footer>By: Igor</footer>
</section>
