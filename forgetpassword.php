<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - True Ratings</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: radial-gradient(circle, #bdc3c7, #2c3e50);
        }
        .container {
            margin-top: 100px;
            max-width: 500px;
        }
        .alert {
            display: none;
        }
        .center{
            width: 250px;
            height: 150px;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <script>
        function showAlert(message, type) {
            const alert = document.getElementById("alert");
            alert.className = `alert alert-${type}`; 
            alert.innerHTML = message; 
            alert.style.display = 'block'; 
            setTimeout(() => {
                alert.style.display = 'none'; 
            }, 5000);
        }
        function hideAlert() {
            const alert = document.getElementById("alert");
            if (alert) {
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 5000); 
            }
        }
    </script>
</head>
<body onload="hideAlert()">
<div class="container mt-5">
<img src="Images/logo.png" class="center">
<div class="container">
    <h2>Forgot Password</h2>
    <div id="alert" class="alert" role="alert"></div>
    <form action="forgot_password.php" method="POST">
        <div class="form-group">
            <label for="email">Enter your email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Send Reset Link</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    
    
    $conn = new mysqli("localhost", "root", "", "product");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>
