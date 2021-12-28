<!DOCTYPE html>

<?php
// ativar a sessão
session_start();

if (isset($_SESSION['count'])) {
    $_SESSION['count'] = 1;
} else {
    $_SESSION['count']++;
}

echo session_id()


?>

<html>
<head>
    <title>mySession Count</title>
</head>

<body>

<h2>Visitantes no Website: <?php echo ($_SESSION['count']);?></h2>



</body>

</html>