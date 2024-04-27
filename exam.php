<?php


$studentName = "Starleigh  Arce";
$courseCode = "BSIT-1A";


$quizScores = array(35, 40, 43, 49, 48); // Scores out of 50
$examScores = array(30, 40, 45); // Scores out of 50


$quizTotal = array_sum($quizScores);
$quizAverage = $quizTotal / count($quizScores);


$examTotal = array_sum($examScores);
$examAverage = $examTotal / count($examScores);


$weightedQuizScore = $quizAverage * 0.4;
$weightedExamScore = $examAverage * 0.6;
$finalGrade = $weightedQuizScore + $weightedExamScore;


echo "Student Name: $studentName\n";
echo "Course Code: $courseCode\n";
echo "Final Grade: $finalGrade\n";
?>