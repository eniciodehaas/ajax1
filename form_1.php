<?php
  $firstName = $_GET['firstName'];
  $age = $_GET['age'];
  $lastName = $_GET['lastName'];
  $email = $_GET['email'];
  echo "<h1>Response Demo Form</h1><h3>";
  echo "You submitted the following information<br><ul>";
  echo "<li>Name: <strong>$firstName</strong>";
  echo " ";
  echo "<strong>$lastName</strong></li>";
  echo "<li>Age: <strong>$age</strong></li>";
  echo "<li>E-mail: <strong>$email</strong></li>";
  echo "</ul></h3>";
 ?>
