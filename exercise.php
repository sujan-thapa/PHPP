<?php



/*
// declaration of string variable
$name="Sujan Thapa";


// string functions in php
echo substr($name,2,5)."<br>";   //it returns a part of a string from index 2 to the length of 5.

$new =  trim($name,"Su");   // it removes the part of a string
echo $new."<br>";

echo strtoupper($name); //this function converts all the character of a string to upper case


*/

/*
// declaration of two dimensional arrays 
$multiDimension = array(
    array(10,11,12),
    array(14,15,16),
    array(17,18,19)
);


// for each loop to iterate through array. first one is for first array and the for loop inside it for the elements of that current array
foreach($multiDimension as $keys){
    foreach($keys as $key){
        echo $key. "\t";
    }
    echo "<br>";
}


*/

/*
// associate array 

$student = array("name"=>"Sujan Thapa","address"=>"Danforth Road");

echo $student['name']."<br>";
echo $student['address'];



*/

/*
// create a function
function callNumbers($num){
    return $num **2;
}

$number = callNumbers(4);

echo "Square number of passed number is ". $number;


*/
/*

// indexed array
$evenNumbers = array(10,20,40,50,60);


$len = count($evenNumbers);


for ($i=0; $i < $len; $i++) { 
    echo $evenNumbers[$i] . "<br>";
    # code...
}

*/


/*
$status = false;

$limit = 10;

// while loop to print 1 to 10.
while (!$status) {
    for ($i=0; $i < $limit; $i++) { 
        echo $i+1 . "<br>";
    }

    // check if i value equals limit, set the value of status to true
    if ($i == $limit) {
        $status = true;
        # code...
    }

}


*/
/*

// declaration of variables

$studentName = "Sujan";


// switch statement to check the condition
switch ($studentName) {
    case 'thapa':
        echo "My name is thapa";
        break;
    case 'swastika':
        echo "My name is Swastika";
        break;
    case 'Sujan':
        echo "My name is Sujan";
        break;
    default:
        echo "Student name is Sujan Thapa";
        break;
}


*/

/*


// variable declaration
$number = 10;

// conditional statement
if ($number==0) {
    echo "Number is zero";
    # code...
}else if($number<0 ){
    echo "Number is less than zero";
}else{
    echo "Number is positive";
}


*/

/*
// declaration of two numerica variables
$num1 = 5;
$num2 = 10;

// arithmetic operations
$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num2 / $num1;
$div2 = $num2%$num1;


// displaying restults
echo $addition," ", $subtraction, " ", $multiplication, " ", $division, " ", $div2;

*/

/*
// declaration of variables 
$name = "Sujan Thapa";
$number = 47777;
$percentage = 66.5;
$status = true;
$friends = array("Swastika", "Kshitij");

// displaying variable types using in-build function
echo gettype($name)."<br>";
echo gettype($number)."<br>";
echo gettype($percentage)."<br>";
echo gettype($status)."<br>";
echo gettype($friends)."<br>";

*/

?>