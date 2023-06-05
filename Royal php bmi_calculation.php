<?php 
  $weight = 100;  
  $height = 1.79; 

  $bmi = $weight / ($height * $height);

  echo "Weight: $weight kg<br>";
  echo "Height: $height m<br>";
  echo "BMI: $bmi<br>";

  if ($bmi < 20) {
      echo "You are underweight<br>";
  } elseif ($bmi >= 20 && $bmi < 30) {
      echo "You are normal<br>";
  } elseif ($bmi >= 30 && $bmi < 40) {
      echo "You are overweight<br>";
  } else {
      echo "Obesity<br>";
  }

?> 

