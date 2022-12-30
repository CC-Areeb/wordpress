<?php

// Function to prevent SQL injection attacks
function prevent_sql_injection($input) {
  // Remove any special characters from the input
  $input = preg_replace('/[^a-zA-Z0-9_ @.-]/', '', $input);

  // Escape any dangerous characters
  $input = esc_sql($input);

  // Return the sanitized input
  return $input;
}

// Example usage:
$unsafe_input = $_POST['username'];
$safe_input = prevent_sql_injection($unsafe_input);

// Use $safe_input in your SQL query instead of $unsafe_input
$query = "SELECT * FROM users WHERE username='$safe_input'";
