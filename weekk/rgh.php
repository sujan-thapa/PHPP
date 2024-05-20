<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
    <p>You have successfully logged in.</p>
    <a href="Q5.php">Logout</a>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
  session_unset();
  session_destroy();
  header('Location: Q5.php');
  exit();
}

?>

<!-- <form action="welcome.php" method="post">
    <button type="submit" name="logout">Logout</button>
</form> -->
