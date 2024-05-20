<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>

    <!--  -->
    <form action="" method="post">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name']; ?>"><br>
        <label for="age">Age</label><br>
        <input type="number" name="age" id="age" value="<?php if(isset($_POST['age'])) echo $_POST['age']; ?>"><br><br>
        <button type="submit">Submit</button>
    </form>


    <?php

    // if ($_SERVER["REQUEST_METHOD"]==GET) {
    //     $name = $_POST["name"];
    //     $age = $_POST["age"];

    //     # code...
    // }



    if (isset($_POST['name']) && isset($_POST['age'])) {
        $name = $_POST["name"];
        $age = $_POST["age"];

        # code...
    }
    echo "Her name is ". $name. " and she is ".$age." years old";


    ?>
</body>
</html>