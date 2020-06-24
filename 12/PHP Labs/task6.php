    
<?php
$temper = $_POST["temp"];
$n = $_POST["n"];
switch($n){
    case 1:
        $max = $temper[$i];
        for($i=0;$i<count($temper);$i++){
            
            if($max<$temper[$i])
            $max = $temper[$i];
        }
        echo "Максимальна температура дорівнює $max";
    break;
    case 2:
        $min = $temper[$i];
        for($i=0;$i<count($temper);$i++){
            
            if($min>$temper[$i])
            $min = $temper[$i];
        }
        echo "Мінімальна температура дорівнює $min";
    break;
    case 3:
        $sum=0;
        for($i=0;$i<count($temper);$i++){
        $sum += $temper[$i];
        }
        $average = $sum/count($temper);
        echo "Середня температура дорівнює $average";
    break;

}
?>


