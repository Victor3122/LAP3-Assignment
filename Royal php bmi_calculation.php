<?php 
while (true) {
    $weight = readline("Enter your weight in kg: ");
    $height = readline("Enter your height in m: ");

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

    $continue = readline("Do you want to calculate the BMI again? (yes/no): ");
    if ($continue !== "yes") {
        break;
    }
}
?>
