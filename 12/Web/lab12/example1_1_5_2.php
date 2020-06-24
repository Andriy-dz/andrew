
<?php

require("../config.php");
//include_once("../db.php");
include_once("../function.php");
// include("example1_1_5_1.php");
header("Content-Type: text/html; charset=".$config{'charset'});

?>

<html>
<head>
<title>Приклад форми get</title>
</head>
<body>
    <?php
$variable2=$_GET['formvariable2'];
echo ($variable2 * 2).'<br>'.'Вхідні дані одержано з файлу example1_1_5_1.php';
?>
<form action="example1_1_5_2.php" method="get">
<input type="text" name="formvariable">
<input type="submit" value="Додати">
</form>
<?php
$variable=$_GET['formvariable'];
echo $variable;
echo "<br>"."А ці отримані з внутрішнього файлу";
?>
</body>
</html>
