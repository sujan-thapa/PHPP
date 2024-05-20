<?php


// current time zone. Since Toronto has eastern time zone, America is being used as a country
date_default_timezone_set("America/Toronto");



// date and time
$currentDate = date("l, j Y - G:i A");

// displaying current date and time
echo $currentDate;





/*

// associative array
$students = array("name:"=>"Sujan", "id"=>22, "contact"=> "abc@gmail.com");


// for loop to iterate through key value
foreach($students as $key => $value ){
    echo "$key: $value <br>";
}


// for specific value using its key
echo "THe student number is: ".$students["id"];

*/
/*

// question 6

// creating a string
$fname = "sujan";
$lname = "thapa";

// concatination of two strings
$fullName = $fname." ". $lname;
$length = strlen($fullName);

echo "My full name is ".$fullName." and the length of string is ".$length. "<br>";

$upperCase = strtoupper($fullName);

echo $upperCase

*/

/*
//an indexed array
$numbers = array(1,2,4,5);

// addition of elements in array
$numbers[] = 10;
$numbers[] = 15;

// length of an array
$length = count($numbers);

// echo $numbers;
// for loop to iterate through array
for ($i=0; $i < $length; $i++) { 
    echo $numbers[$i]."<br>";
    # code...
}
*/



/* question 
function greetMessage($firstName){
    return "Welcome , $firstName!";
}


$greet = greetMessage("Sujan");

echo $greet;
*/

/* quesiton2 
$num1 = 4;
$num2 = 5;

// addition of two numbers
$sum = $num1 + $num2;

//echo statement
echo "Sum of two numbers: ".$sum;

*/
?>

