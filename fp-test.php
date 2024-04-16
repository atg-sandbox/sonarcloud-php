<?php

// Simulate user input (may be flagged as potential injection)
$user_input = $_GET['name']; 

// Simulate sanitization (may be flagged as unnecessary)
$sanitized_input = htmlspecialchars($user_input); 

// Simulate database connection (may be flagged as insecure)
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Simulate building a query (may be flagged for SQL injection)
$query = "SELECT * FROM users WHERE name = '" . $sanitized_input . "'";

// Simulate query execution (may be flagged for SQL injection)
$result = mysqli_query($conn, $query);

// Simulate usage (may be flagged for potential XSS)
if ($result && mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_assoc($result);
  echo "Hello, " . $row['name'] . "!";
} else {
  echo "No user found.";
}

// Simulate closing connection (may not be flagged, but good practice)
mysqli_close($conn);

?>
