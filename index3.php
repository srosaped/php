
<!DOCTYPE html>

<?php
// ativar a sessão
session_start();
?>

<html>
<head>
    <title>mySession 2</title>


</head>

<body>

<?php
echo "Cor favorita " . $_SESSION["favColor"];
echo "<br>";
echo "Animal favorito " . $_SESSION["favAnimal"];
echo "<hr>";
echo $x;
?>

</body>

</html>