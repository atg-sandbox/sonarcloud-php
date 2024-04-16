<?php

class User {
  public $username;
  public $email;
}

// Simulate user input (may be flagged for potential object injection)
$user_data = unserialize($_POST['user_data']);

if (is_object($user_data) && $user_data instanceof User) {
  echo "Welcome, " . $user_data->username . "!";
} else {
  echo "Invalid user data.";
}

?>
