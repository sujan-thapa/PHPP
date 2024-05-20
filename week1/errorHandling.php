<?php

// function to check validation
function checkValid($number){
    if ($number<0) {

        throw new Exception("The given number should be greater than zero");
    }
    return true;

}


// try catch block to handle errors
try {
    checkValid(-5);
    echo "Number is valid";
} catch (Exception $e) {
    echo 'Message: '.$e->getMessage();
}

?>

