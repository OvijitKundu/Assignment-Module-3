Task 3: Array Sorting

<?php

function sortArrayDescending($grades){
    // Sort the grades in descending order
    rsort($grades);
    // Print the sorted grades as an array
    print_r($grades);
}

// Define the initial array
$grades = [85, 92, 78, 88, 95];

// Call the function to sort the grades in descending order
sortArrayDescending($grades);