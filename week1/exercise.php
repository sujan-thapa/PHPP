<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <!-- <input type="number" name="number" value=" ?>"> -->
        
        <label>Name</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"> <br>
        <label for="color">Color:</label>
        <input type="text" name="color" value="<?php if(isset($_POST['color'])) echo $_POST['color']; ?>"><br>
        <button type="submit">Submit</button>
    </form>
    <?php


    // check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $color = $_POST["color"];

        

        # code...
    }

    echo "Hello ".$name.", your favourite colour is ".$color;

/*
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // user's input
        $number = $_POST["number"];
        
        // conditional statements for checking odd and even numbers
        if ($number % 2 == 0) {
            echo "<p>$number is even.</p>";
        } else {
            echo "<p>$number is odd.</p>";
        }
    }

    */


    
    ?>

</body>
</html>