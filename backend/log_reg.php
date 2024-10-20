<?php
session_start();

// initializing variables
$tup_id = "";
$email  = "";
$errors = array(); 

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'alumni');

// Check if the connection fails
if (mysqli_connect_errno()) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Register user
if (isset($_POST['reg_user'])) {
    // Receive all input values from the form
    $college = mysqli_real_escape_string($db, $_POST['college']);
    $course = mysqli_real_escape_string($db, $_POST['course']);
    $tup_id = mysqli_real_escape_string($db, $_POST['tup_id']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);

    // Form validation
    if (empty($tup_id)) { array_push($errors, "TUP-ID is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
    }

    // Password validation
    if (strlen($password_1) < 6) {
        array_push($errors, "Password must be at least 6 characters long");
    }
    if (!preg_match('/[A-Za-z]/', $password_1)) {
        array_push($errors, "Password must contain at least one letter");
    }
    if (!preg_match('/[0-9]/', $password_1)) {
        array_push($errors, "Password must contain at least one number");
    }
    if (!preg_match('/[!$@%&_]/', $password_1)) {
        array_push($errors, "Password must contain at least one special character (!$@%&_)");
    }

    // Check if user already exists
    $user_check_query = "SELECT * FROM users WHERE tup_id='$tup_id' OR email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['tup_id'] === $tup_id) {
            array_push($errors, "TUP-ID already exists");
        }
        if ($user['email'] === $email) {
            array_push($errors, "Email already exists");
        }
    }

    // Register the user if there are no errors
    if (count($errors) == 0) {
        $password = md5($password_1); // Encrypt password before storing

        $query = "INSERT INTO users (college, course, tup_id, email, password, birthdate) 
                  VALUES ('$college', '$course', '$tup_id', '$email', '$password', '$birthdate')";

        $result = mysqli_query($db, $query);
        $_SESSION['tup_id'] = $tup_id;
        $_SESSION['success'] = "You are now registered";
        $_SESSION['show_popup'] = true; //set popup flag
        header('location: ../client-page/home.php'); // Redirect to homepage after successful registration
    }
}


// Login User
if (isset($_POST['login_user'])) {
    // Receive input values from the form
    $tup_id = mysqli_real_escape_string($db, $_POST['tup_id']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $birthdate = mysqli_real_escape_string($db, $_POST['birthdate']);

    // Form validation
    if (empty($tup_id)) {
        array_push($errors, "TUP-ID is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }
    if (empty($birthdate)) {
        array_push($errors, "Birthdate is required");
    }

    // Check if there are no validation errors
    if (count($errors) == 0) {
        $password = md5($password); // Encrypt the password (ensure this matches the registration encryption)

        // Query to check if the user exists
        $query = "SELECT * FROM users WHERE tup_id='$tup_id' AND password='$password' AND birthdate='$birthdate'";
        $results = mysqli_query($db, $query);

        // If user exists, log in
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['tup_id'] = $tup_id;
            $_SESSION['success'] = "You are now logged in";
            $_SESSION['show_popup'] = true; //set popup flag
            header('location: ../client-page/home.php'); // Redirect to the home page
        } else {
            array_push($errors, "Wrong TUP-ID/password combination");
        }
    }
}
?>