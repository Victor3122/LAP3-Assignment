<?php 
  $weight = 70; 
    $height = 1.75; 

    $bmi = $weight / ($height * $height);

    echo "Weight: $weight kg\n";
    echo "Height: $height m\n";
    echo "BMI: $bmi\n";

    if ($bmi < 20) {
        echo "You are underweight\n";
    } elseif ($bmi >= 20 && $bmi < 30) {
        echo "You are normal\n";
    } elseif ($bmi >= 30 && $bmi < 40) {
        echo "You are overweight\n";
    } else {
        echo "Obesity\n";
    }

?>
