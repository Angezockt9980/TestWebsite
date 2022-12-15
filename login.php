<?php

// Get the username and password from the form.
$username = $_POST['username'];
$password = $_POST['password'];

// Open the .htpasswd file.
$file = fopen('.htpasswd', 'r');

// Read each line of the file until the end is reached.
while (!feof($file)) {
  // Split the line into the username and password stored in the file.
  $line = explode(':', fgets($file));

  // If the username and password from the form match the ones in the file, the login is successful.
  if ($username == $line[0] && $password == $line[1]) {
    // TODO: Redirect the user to the logged in page.
  }
}

// If the end of the file is reached without finding a match, the login is unsuccessful.
echo 'Incorrect username or password.';

fclose($file);
