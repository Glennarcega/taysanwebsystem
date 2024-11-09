<?php
session_start();

// initializing variables
$username = "";
$email = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'casas_transient_house_db');
if (!$db) {
    die("Database connection failed: " . mysqli_connect_error());
}

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $contactno = mysqli_real_escape_string($db, $_POST['contactno']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($address)) { array_push($errors, "Address is required"); }
  if (empty($contactno)) { array_push($errors, "Contact number is required"); }
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
      array_push($errors, "The two passwords do not match");
  }

  // Check for existing username or email
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);

  // Check for SQL error
  if (!$result) {
      array_push($errors, "Error checking user: " . mysqli_error($db));
  } else {
      $user = mysqli_fetch_assoc($result);
      
      if ($user) { // if user exists
          if ($user['username'] === $username) {
              array_push($errors, "Username already exists");
          }
          if ($user['email'] === $email) {
              array_push($errors, "Email already exists");
          }
      }
  }

  // Register user if no errors
  if (count($errors) == 0) {
      $password = password_hash($password_1, PASSWORD_DEFAULT); // encrypt the password

      $query = "INSERT INTO users (name, address, contactno, username, email, password) 
                VALUES('$name', '$address', '$contactno', '$username', '$email', '$password')";

      // Execute query and check for errors
      if (!mysqli_query($db, $query)) {
          array_push($errors, "Error inserting user: " . mysqli_error($db));
      } else {
          $user_id = mysqli_insert_id($db);
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: user_page.php?id=' . $user_id);
          exit();
      }
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        // Select user by username
        $query = "SELECT * FROM users WHERE username='$username'";
        $results = mysqli_query($db, $query);
        if (!$results) {
            array_push($errors, "Error retrieving user: " . mysqli_error($db));
        } elseif (mysqli_num_rows($results) == 1) {
            $user = mysqli_fetch_assoc($results);

            // Verify password
            if (password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "You are now logged in";
                $user_id = $user['id'];
                header('location: user_page.php?id=' . $user_id);
                exit();
            } else {
                array_push($errors, "Wrong username/password combination");
            }
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }
}

// Display errors (for debugging, remove in production)
foreach ($errors as $error) {
    echo "<p style='color:red;'>$error</p>";
}
?>
