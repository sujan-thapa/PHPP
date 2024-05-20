<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Conversion of USD to Euro</h2><br>

    <form action="" method="POST">
        <label for="USD">USD</label><br>
        <input type="number" name="USD" id="USD"><br><br>
        <button type="submit">Convert</button>
    </form>

    <?php

        if (isset($_POST['USD'])) {
            $usd  = $_POST['USD'];
            # code...
        }
        // if ($_SERVER["REQUEST_METHOD"] == POST) {

        //     $number = $_POST['USD'];
        //     # code...
        // }

        // Rate of 1usd = 0.94 Euro
        $euroValue = 0.94;

        $euro = $usd * $euroValue;

        echo "Conversion of ".$usd." USD will be ".$euro." Euros";


    ?>

</body>
</html>