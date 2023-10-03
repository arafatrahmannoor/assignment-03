<?php

$studentGrades = array(
    array('Math' => 85, 'English' => 92, 'Science' => 78),
    array('Math' => 88, 'English' => 95, 'Science' => 90),
    array('Math' => 75, 'English' => 80, 'Science' => 85),
);

function calculateAndPrintAverage($grades)
{
    foreach ($grades as $student)
    {
        $total = array_sum($student);
        $average = $total / count($student);
        echo "Student Average: $average\n";
    }
}

calculateAndPrintAverage($studentGrades);
?>