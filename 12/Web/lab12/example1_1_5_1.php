
<?php

require("../config.php");
//include_once("../db.php");
include_once("../function.php");
header("Content-Type: text/html; charset=".$config{'charset'});

$variable=$_POST['formvariable'];
echo $variable;
echo var_dump(is_int($variable));


echo "<head>";
echo "<title>Приклад форм Post і Get</title>";
echo "</head>";
echo "<body>";
echo '<form action="example1_1_5_1.php" method="post">';
echo '<input type="text" name="formvariable">';
echo "<input type='submit' value='Додати'>";
echo"</form>";
echo "<form action='example1_1_5_2.php' method ='get'>";
echo "<input type='text' name='formvariable2'>";
echo "<input type='submit' value='Додати'>";
echo "</form>";
echo "</body>";

?>
