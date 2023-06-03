<?php
	echo "HELLO WORLD";
?>
<?php
	echo '<br/>';
	$a = 1; 
	var_dump($a);
	echo '<br/>';
	$b = 1.5;
	var_dump($b);
	echo '<br/>';
	$c = "I Love PHP";
	var_dump($c);
	echo '<br/>';
	$d = true;
	var_dump($d); 
?>
<?php

$number1 = 19;
$number2 = 22;
$sum = $number1 + $number2;
echo "The sum of $number1 and $number2 is: $sum\n";
echo '<br/>';

// Calculate the square root of a given number
$number = 144;
$squareRoot = sqrt($number);
echo "The square root of $number is: $squareRoot\n";
echo '<br/>';

// Find the remainder of dividing two numbers
$dividend = 80;
$divisor = 5;
$remainder = $dividend % $divisor;
echo "The remainder of dividing $dividend by $divisor is: $remainder\n";
echo '<br/>';

// Convert temperature from Celsius to Fahrenheit
$celsius = 88;
$fahrenheit = ($celsius * 9/5) + 32;
echo "$celsius degrees Celsius is equal to $fahrenheit degrees Fahrenheit\n";
echo '<br/>';

// Generate a random number between 1 and 10
$randomNumber = rand(1, 100);
echo "Random number between 1 and 10: $randomNumber\n";
?>
<?php
// Constants
const PASS_GRADE = 60;
const SUBJECTS = [
    "Math" => 70,
    "Science" => 65,
    "English" => 70,
    "History" => 70,
    "Art" => 88
];

// Calculate average grade
$totalSubjects = count(SUBJECTS);
$sumGrades = array_sum(SUBJECTS);
$averageGrade = $sumGrades / $totalSubjects;

// Check if student passed or failed
if ($averageGrade >= PASS_GRADE) {
    echo "Congratulations! You passed the year with an average grade of $averageGrade.\n";
} else {
    echo "Oops! You failed the year with an average grade of $averageGrade.\n";
}

// Determine subject grades
echo "<br/>Subject Grades:\n <br/>";
foreach (SUBJECTS as $subject => $grade) {
    if ($grade >= PASS_GRADE) {
        echo "$subject: Passed\n";
    } elseif ($grade >= 60 && $grade < PASS_GRADE) {
        echo "$subject: Conditional Pass\n";
    } else {
        echo "$subject: Failed\n";
    }
    echo "<br/>";
}

// Analyze highest and lowest grades
$highestGrade = max(SUBJECTS);
$lowestGrade = min(SUBJECTS);

echo "\n";
echo "Highest Grade: $highestGrade\n";
echo "Lowest Grade: $lowestGrade\n";

// Perform extra credit calculation using a switch statement
$extraCreditSubject = "Math";
$extraCredit = 0;

switch ($extraCreditSubject) {
    case "Math":
        $extraCredit = $highestGrade * 0.1;
        break;
    case "Science":
        $extraCredit = $highestGrade * 0.05;
        break;
    default:
        $extraCredit = 0;
        break;
}

echo "\n";
echo "Extra Credit for $extraCreditSubject: $extraCredit\n";
?>
<?php
// Constants
const PASS_GRADE = 60;
const SUBJECTS = [
    "Math" =>75,
    "Science" => 70,
    "English" => 65,
    "History" => 80,
    "Art" => 70
];

// Function to calculate average grade
function calculateAverageGrade($grades) {
    $totalSubjects = count($grades);
    $sumGrades = array_sum($grades);
    $averageGrade = $sumGrades / $totalSubjects;
    return $averageGrade;
}

// Check if student passed or failed
function checkPassOrFail($averageGrade) {
    if ($averageGrade >= PASS_GRADE) {
        echo "Congratulations! You passed the year with an average grade of $averageGrade.\n";
    } else {
        echo "Oops! You failed the year with an average grade of $averageGrade.\n";
    }
}

// Determine subject grades
function analyzeSubjectGrades($grades) {
    echo "Subject Grades: <br/>";
    foreach ($grades as $subject => $grade) {
        if ($grade >= PASS_GRADE) {
            echo "$subject: Passed\n";
        } elseif ($grade >= 60 && $grade < PASS_GRADE) {
            echo "$subject: Conditional Pass\n";
        } else {
            echo "$subject: Failed\n";
        }
        echo "<br/>";
    }
}

// Calculate average grade
$averageGrade = calculateAverageGrade(SUBJECTS);

// Check if student passed or failed
checkPassOrFail($averageGrade);

// Determine subject grades
analyzeSubjectGrades(SUBJECTS);
?>
