<?php
$marks = array(
    'Math' => 80,
    'Science' => 70,
    'English' => 90,
    'History' => 85,
    'Geography' => 75
);
$total_marks = 0;
foreach ($marks as $subject => $mark) {
    $total_marks += $mark;
}
$percentage = ($total_marks / 500) * 100;
echo "Percentage: " . number_format($percentage, 2) . "%";
echo "<br><br>Grades:<br>";
foreach ($marks as $subject => $mark) {
    if ($mark >= 90) {
        $grade = 'A';
    } elseif ($mark >= 80) {
        $grade = 'B';
    } elseif ($mark >= 70) {
        $grade = 'C';
    } elseif ($mark >= 60) {
        $grade = 'D';
    } else {
        $grade = 'F';
    }
    echo "$subject: $mark ($grade)<br>";
}
?>