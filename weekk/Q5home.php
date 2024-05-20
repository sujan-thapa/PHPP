<?php
// start session 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <!-- inline php script to display welcome message -->
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>Hey, <?php echo htmlspecialchars($_SESSION['username']); ?>! You logged in successfully.</p>

    <!-- logout button  -->
    <form method="post">
        <button type="submit" name="logout">Log Out</button>
    </form>
</body>
</html>

<?php
// check if the request is post or not and with isset method, checking the value of logout declared or not throgh clicking the submit button 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
// remove all session variables
  session_unset();

//   destroys the current session
  session_destroy();
  header('Location: Q5login.php');
  exit();
}

?>