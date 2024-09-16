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
        <img src="../design/image/Tuplogo.png" alt="logo_1" class="logo-1">
        <img src="../design/image/tupmanila_assoc.png" alt="" class="logo-2">
    </div>

    <div class="system-title">
        <h1>TUPATS</h1>
        <h2>The Technological University of the Philippines Alumni Tracer System</h2>
    </div>

    <div class="btn">
        <button class="login-btn" id="loginBtn"><a href="#">LOGIN</a></button> <br>
        <button class="register-btn" id="registerBtn"><a href="#">REGISTER</a></button>
    </div>

    <div id="modal-container"></div>

    <script>
            // Get modal container
            var modalContainer = document.getElementById("modal-container");

            // Get buttons
            var loginBtn = document.getElementById("loginBtn");
            var registerBtn = document.getElementById("registerBtn");

            // Function to load modal content dynamically
            function loadModal(url, closeId) {
                fetch(url)
                    .then(response => response.text())
                    .then(data => {
                        modalContainer.innerHTML = data;

                        // Add event listener for closing the modal
                        var closeBtn = document.getElementById(closeId);
                        closeBtn.onclick = function() {
                            modalContainer.innerHTML = ''; // Clear modal content
                        }

                        // Close modal when clicking outside the content
                        window.onclick = function(event) {
                            if (event.target.classList.contains("modal")) {
                                modalContainer.innerHTML = ''; // Close modal
                            }
                        }
                    })
                    .catch(error => console.error("Error loading modal:", error));
            }

            // Event listeners for buttons
            loginBtn.onclick = function() {
                loadModal("login.php", "loginClose");
            }

            registerBtn.onclick = function() {
                loadModal("register.php", "registerClose");
            }

    </script>
    
    
</body>
</html>