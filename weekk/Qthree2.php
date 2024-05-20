<?php

// check whether a variable is empty or declared.
if (isset($_POST['colour'])) {
  $userColor = $_POST['colour'];
  $text = "Your Selected Color";
  
  // Displaying the user's desired color in a background
  echo "<p style='background-color: $userColor'>$text</p>";
}
?>
