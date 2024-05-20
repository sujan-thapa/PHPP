<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>

    <!--  -->
    <form action="" method="get">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="<?php if(isset($_GET['name'])) echo $_GET['name']; ?>"><br>
        <label for="age">Age</label><br>
        <input type="number" name="age" id="age" value="<?php if(isset($_GET['age'])) echo $_GET['age']; ?>"><br><br>
        <button type="submit">Submit</button>
    </form>


    <?php

    // if ($_SERVER["REQUEST_METHOD"]==GET) {
    //     $name = $_GET["name"];
    //     $age = $_GET["age"];

    //     # code...
    // }



    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = $_GET["name"];
        $age = $_GET["age"];

        # code...
    }
    echo "His name is ". $name. " and he is ".$age." years old";


    ?>
</body>
</html>