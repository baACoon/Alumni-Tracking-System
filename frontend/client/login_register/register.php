<?php 
// Include the server-side logic
include($_SERVER['DOCUMENT_ROOT'] . '/Alumni-Tracking-System/backend/log_reg.php');

// Include the errors.php file to display validation errors
include($_SERVER['DOCUMENT_ROOT'] . '/Alumni-Tracking-System/frontend/errors.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/modal.css">
    <title>Register | Alumni Tracking System</title>
</head>
<body>
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" id="registerClose">&times;</span>
            <h2>Register Form</h2>

            <form method="post" action="register.php"> <!-- Ensure the form submits to register.php -->
                <?php include($_SERVER['DOCUMENT_ROOT'] . '/Alumni-Tracking-System/frontend/errors.php'); ?> <!-- Display errors -->

                <label for="college">College:</label>
                <select id="college" name="college">
                    <option value="COE">College of Engineering</option>
                    <option value="COS">College of Science</option>
                    <option value="CIE">College of Industrial Education</option>
                    <option value="CLA">College of Liberal Arts</option>
                    <option value="CAFA">College of Architecture and Fine Arts</option>
                </select><br><br>

                <label for="course">Course:</label>
                <select id="course" name="course">
                    <option value="BSIT">BS in Information Technology</option>
                    <option value="BSEE">BS in Electrical Engineering</option>
                    <option value="BSME">BS in Mechanical Engineering</option>
                    <option value="BSCE">BS in Civil Engineering</option>
                    <option value="BSCpE">BS in Computer Engineering</option>
                    <option value="BSIE">BS in Industrial Engineering</option>
                    <option value="BSA">BS in Architecture</option>
                </select><br><br>

                <label for="tup_id">TUP-ID:</label>
                <input type="text" id="tup_id" name="tup_id" value="<?php echo isset($tup_id) ? $tup_id : ''; ?>" placeholder="TUPM - ## - ####" required><br><br>

                <label for="email">Personal Email:</label>
                <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>" required><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password_1"><br><br>

                <label for="password_2">Confirm Password:</label>
                <input type="password" id="password_2" name="password_2"><br><br>

                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate"><br><br>

                <button type="submit" name="reg_user">Register</button> <!-- Correct button name -->
            </form>
        </div>
    </div>
</body>
</html>
