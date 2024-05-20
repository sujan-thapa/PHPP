<?php

// Function that throws an exception if an invalid argument is passed
function validateNumber($number) {
    if (!is_numeric($number)) {
        throw new InvalidArgumentException("Invalid argument: $number is not a valid number.");
    }
    return true;
}

// Test the function with both valid and invalid arguments
try {
    // Test with a valid argument
    $validNumber = 10;
    validateNumber($validNumber);
    echo "Valid argument: $validNumber <br>";

    // Test with an invalid argument
    $invalidNumber = "abc";
    validateNumber($invalidNumber);
    echo "Valid argument: $invalidNumber <br>"; // This line won't be executed
} catch (InvalidArgumentException $e) {
    // Handle the exception and display an error message
    echo "Error: " . $e->getMessage();
}

?>
