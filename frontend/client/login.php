<?php
include($_SERVER['DOCUMENT_ROOT'] . '/Alumni-Tracking-System/backend/log_reg.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/modal.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>TUP-MANILA | Log in</title>
</head>
<body>
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="loginClose">&times;</span>
            <h2>Login Form</h2>
            <form method="POST" action="login.php">
                <label for="college">College:</label>
                <select id="college" name="college">
                    <option value="COE">College of Engineering</option>
                    <option value="COS">College of Science</option>
                    <option value="CIE">College of Industrial Education</option>
                    <option value="CLA">College of Liberal Arts</option>
                    <option value="CAFA">College of Architecture and Fine Arts</option>
                </select><br><br>

                <label for="tup_id">TUP-ID:</label>
                <input type="text" id="tup_id" name="tup_id" placeholder="TUPM - ## - ####" required><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br><br>

                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate" required><br><br>

                <button type="submit" name="login_user">Login</button>
                <span>Forgot Password? <a href="#">click here</a></span>
            </form>
        </div>
    </div>
</body>
</html>
