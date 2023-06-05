<?php

function calculateGrade($marks) {
    if ($marks >= 90) {
        return 'A';
    } elseif ($marks >= 80) {
        return 'B';
    } elseif ($marks >= 70) {
        return 'C';
    } elseif ($marks >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}

$student_name = "Mg Mg";
$math_marks = 85;
$english_marks = 90;
$biology_marks = 78;
$computer_marks = 92;

$total_marks = $math_marks + $english_marks + $biology_marks + $computer_marks;
$gpa = $total_marks / 4;

$grade = calculateGrade($gpa);
$status = ($grade === 'F') ? 'Fail' : 'Pass';

echo "Student: $student_name\n";
echo "Math Marks: $math_marks\n";
echo "English Marks: $english_marks\n";
echo "Biology Marks: $biology_marks\n";
echo "Computer Marks: $computer_marks\n";
echo "Total Marks: $total_marks\n";
echo "GPA: $gpa\n";
echo "Grade: $grade\n";
echo "Status: $status\n";
?>

