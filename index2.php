<!DOCTYPE html>

<?php
// ativar a sessão
session_start();
?>

<html>
<head>
    <title>mySession 1</title>
</head>

<body>

<?php
$_SESSION["favColor"] = "Red";
$_SESSION["favAnimal"] = "Cat";
$x = "teste";

?>

<a href="index3.php" target="_blank">Index 3</a>

<hr>

<?php 
//session_unset(); // remove todas as variaveis de sessão
//session_destroy(); // desligar as sessões
?>

</body>

</html>