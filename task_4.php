Task 4: Multidimensional Array

<?php

function averageGrade($studentGrades){
    foreach($studentGrades as $student => $grade){
        
        $total = array_sum($grade);
        $count = count($grade);
        $average = $total / $count;

        if($average >= 80){
            echo "{$student}'s Average Grade: A ({$average})\n";
        }else if($average >= 70){
            echo "{$student}'s Average Grade: B ({$average})\n";
        }else if($average >= 60){
            echo "{$student}'s Average Grade: C ({$average})\n";
        }else{
            echo "{$student}'s Average Grade: F ({$average})\n";
        }
    }
}

// Define the multidimensional array with student grades
$studentGrades = [
    'Student1' => ['Math'=> 76, 'English' => 87, 'Science' => 95],
    'Student2' => ['Math'=> 65, 'English' => 65, 'Science' => 65],
    'Student3' => ['Math'=> 60, 'English' => 61, 'Science' => 56],
];

// Call the function to calculate and print average grades
averageGrade($studentGrades);