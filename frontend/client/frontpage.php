<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUP-MANILA</title>
    <link rel="stylesheet" href="../design/frontpage.css">
    <link rel="stylesheet" href="../design/modal.css">
</head>
<body>
    <div class="bg-image"></div>

    <div class="logo">
        <img src="../image/Tuplogo.png" alt="logo_1" class="logo-1">
        <img src="../image/tupmanila_assoc.png" alt="" class="logo-2">
    </div>

    <div class="system-title">
        <h1>TUPATS</h1>
        <h2>The Technological University of the Philippines Alumni Tracer System</h2>
    </div>

    <div class="btn">
        <!-- Form that submits to the same page to trigger the modal -->
        <form method="POST">
            <button class="login-btn" name="modal" value="login">LOGIN</button> <br>
            <button class="register-btn" name="modal" value="register">REGISTER</button>
        </form>
    </div>

    <div id="modal-container">
        <?php
        // Check if a button has been pressed
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($_POST['modal'] == 'login') {
                include 'login.php'; // Load the login modal
            } elseif ($_POST['modal'] == 'register') {
                include 'register.php'; // Load the register modal
            }
        }
        ?>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Close modal on clicking the close button
            document.querySelectorAll(".close").forEach(function(closeBtn) {
                closeBtn.onclick = function() {
                    document.getElementById("modal-container").innerHTML = ''; // Clear modal content
                }
            });

            // Close modal when clicking outside the content
            window.onclick = function(event) {
                if (event.target.classList.contains("modal")) {
                    document.getElementById("modal-container").innerHTML = ''; // Close modal
                }
            };
        });
    </script>


</body>
</html>