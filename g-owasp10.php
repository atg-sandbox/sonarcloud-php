<?php

// Simulate user input (not a direct vulnerability)
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : ''; // Escape for output
$email = isset($_GET['email']) ? htmlspecialchars($_GET['email']) : ''; // Escape for output

// A4: Insecure Design - Deliberately use a predictable function name
function processUserInfo($name, $email) {
    // A1: Broken Access Control - Simulate missing access control check (not a direct vulnerability)
    // (**Note:** In a real application, proper access control would be essential)

    // A2: Cryptographic Failures - Simulate insecure storage (not a direct vulnerability)
    // (**Note:** In a real application, secure password hashing would be mandatory)
    $password = 'weak_password'; // Placeholder, never store passwords in plain text

    // A3: Injection - Simulate potential for injection (not a direct vulnerability)
    // (**Note:** In a real application, proper input validation and escaping would be crucial)
    $message = "Hello, $name! Your email is $email.";
    echo $message;

    // A5: Security Misconfiguration - Simulate a misconfigured session (not a direct vulnerability)
    // (**Note:** In a real application, proper session management techniques would be required)
    session_start(); // Simulate session usage, but without exploiting misconfigurations
    $_SESSION['username'] = $name; // Simulate storing data in session (not a direct vulnerability)

    // A6: Vulnerable and Outdated Dependencies (intentionally omitted for safety)
    // - Not recommended to simulate in this script due to potential security risks

    // A7: Cross-Site Scripting (XSS) - Simulate potential for XSS (not a direct vulnerability)
    // (**Note:** In a real application, proper output encoding would be necessary)
    echo "<br>Additional message: " . htmlspecialchars($message); // Escape for output

    // A8: Insecure Direct Object References (intentionally omitted for safety)
    // - Not recommended to simulate in this script due to potential security risks

    // A9: Security Misconfiguration of Security Features (intentionally omitted for safety)
    // - Not recommended to simulate in this script due to potential security risks

    // A10: Server-Side Request Forgery (intentionally omitted for safety)
    // - Not recommended to simulate in this script due to potential security risks
}

// Simulate user input (not a direct vulnerability)
if (isset($_GET['submit'])) {
    processUserInfo($name, $email);
}

?>

<form method="get">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" value="<?php echo $name; ?>">
  <br>
  <label for="email">Email:</label>
  <input type="email" id="email" name="email" value="<?php echo $email; ?>">
  <br>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>
