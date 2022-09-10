<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="js/script.js"> </script>
    <title> Switch </title>
</head>
<body>
<form method="GET" action="#" onsubmit="return validanome1(this)">
<p> Qual Seu Nome: <input type="text" name="nome"> </p>
<p> <input type="submit" value="Enviar"> </p>
</form>
<?php 
//Switch Em PHP
$nome = strtoupper ($_GET["nome"]);
echo $nome;
switch($nome)
{
    case "João";
        echo "<h4>Bem Vindo, João</h4>";
        break;
    case "Maria";
        echo "<h4>Bem Vindo, Maria</h4>";
        break;
    default;
    echo "<h4>Todos Sejam Bem Vindos!</h4>";
        break;
}
?>
<hr>
<form method="GET" action="#" onsubmit="return validanum1(this)">
<p> Digite Algo: <input type="text" name="num1"> </p>
<p> <input type="submit" value="Enviar"> </p>
</form>
<?php 
/*$num1 = $_GET["num1"]; Como Converter Em String 
$num1 = intval($_GET["num1"]); Como Converter Em Número */

if (is_integer($num1))
{
    echo "$num1 É Um Número Inteiro";
}
else
{
    if (is_string($num1))
    {
        echo "$num1 É Uma String";
    }
    else
    {
        if (is_double($num1))
        {
            echo "$num1 É Um Número Double";
        }
        else
        {
            if (is_bool($num1))
            {
                echo "$num1 É Um Booleano";
            }
        }
    }
}
?>
</body>
</html>