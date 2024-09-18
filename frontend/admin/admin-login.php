<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUPATS Admin</title>
    <link rel="stylesheet" href="../admin/style/admin-login.css">
</head>
<body>
    <div class="admin-logo">
        <img src="../image/Tuplogo.png" alt="logo_1" class="logo_1">
        <img src="../image/alumniassoc_logo.png" alt="logo_2" class="logo_2">
    </div>

    <div class="admin-title">
        <h1>TUPATS</h1>
        <h2>The Technological University of the Philippines Alumni Tracer System</h2>
        <h5>ADMIN ACCESS</h5>
    </div>

    <div class="login_container">
        <form class="login_form">
            <h4>Username</h4>
            <input type="text" id="admin_user" name="admin_user" id="admin_user" placeholder="Username">
    
            <h4>Password</h4>
            <input type="password" placeholder="Password" name="password">

            <div class="login-actions">
                <a class="forgotpassword" href="#">Forgot Password? <span>Click Here</span></a>
                <a href="dashboard.php" class="login-button">LOGIN</a>
            </div>

        </form>
    </div>
    
</body>
</html>