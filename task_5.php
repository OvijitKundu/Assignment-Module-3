Task 5: Password Generator

<?php

function generatePassword($length) {
    $lowercaseLetters = 'abcdefghijklmnopqrstuvwxyz';
    $uppercaseLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    
    // Initialize the password with one character from each category
    $password = $lowercaseLetters[rand(0, strlen($lowercaseLetters) - 1)] .
                $uppercaseLetters[rand(0, strlen($uppercaseLetters) - 1)] .
                $numbers[rand(0, strlen($numbers) - 1)] .
                $specialChars[rand(0, strlen($specialChars) - 1)];
    
    // Calculate how many additional characters are needed
    $remainingLength = $length - 4;
    
    // Combine all character sets
    $characters = $lowercaseLetters . $uppercaseLetters . $numbers . $specialChars;
    
    for ($i = 0; $i < $remainingLength; $i++) {
        $randomIndex = mt_rand(0, strlen($characters) - 1);
        $password .= $characters[$randomIndex];
    }
    
    // Shuffle the password to ensure randomness
    $password = str_shuffle($password);
    
    return "Random Password: ". $password . "\n";
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print the generated password
echo $password;