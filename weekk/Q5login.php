<?php
session_start();

// Define login credentials manually 
$predefine_username = 'admin';
// password_hash method creates a hashing password
$predefine_password = password_hash('admin', PASSWORD_DEFAULT);


// check the fif form has been submitted using POST METHOD.
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // htmlspecialchars method converts predefined characters to HTML entities.
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);


    // validate the user's input to the pre-defined login credentials. password_verify method matches a hash password
    if ($username === $predefine_username && password_verify($password, $predefine_password)) {
        $_SESSION['username'] = $username;
        header('Location: Q5home.php');
        exit();
    } else {
        $error = 'Invalid username or password.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title></title> -->
</head>
<body>
    <h2>Login</h2>
    <?php
    if (isset($error)) {
        echo '<p style="color:red;">' . $error . '</p>';
    }
    ?>

    <!-- form for login  -->
    <form action="Q5login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Login</button>
    </form>
</body>
</html>
