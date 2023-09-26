Task 2: Array Manipulation

<?php

// Declare a function to remove even numbers
function removeEvenNumbers($num){
    return $num % 2 !== 0;
}

// Creates an array with numbers from 1 to 10
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// Filter numbers
print_r(array_filter($numbers, 'removeEvenNumbers'));