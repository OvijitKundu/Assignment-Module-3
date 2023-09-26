Task 1: String Manipulation

<?php

function modifyText($text){
    // Converted the string to all lowercase
    $textToLower = strtolower($text);
    echo "Converted to lowercase: " . $textToLower . "\n";

    // Replaced "brown" with "red" in the string
    $replaceText = str_replace('brown', 'red', $textToLower);
    echo "Replaced 'brown' with 'red': " . $replaceText . "\n";
}
    
// Define the initial string
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function to modify and print the text
modifyText($text);