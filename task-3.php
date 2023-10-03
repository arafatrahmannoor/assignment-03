<?php
$grades = array(85,92,78,88,95);

function sortGradesDecending($arr)
{
    rsort($arr);
    return $arr;
}

$sortedGrades = sortGradesDecending($grades);
print_r($sortedGrades);

?>