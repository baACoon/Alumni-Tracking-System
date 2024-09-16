<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/modal.css">
    <title>TUP-MANILA | Log in</title>
</head>
<body>
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" id="loginClose">&times;</span>
            <h2>Login Form</h2>
            <form>
                    <!-- Course Selection -->
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

                <label for="username">TUP-ID:</label>
                <input type="text" id="username" name="TUP-ID" placeholder="TUPM - ## - ####"><br><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password"><br><br>

                <label for="birthdate">Birthdate:</label>
                <input type="date" id="birthdate" name="birthdate"><br><br>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>


    
</body>
</html>