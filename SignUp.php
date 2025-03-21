<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup - Rating Ratings</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"href="SignUp.css"/>
    <script>
        function hideAlert() {
            const alert = document.getElementById("alert");
            if (alert) {
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 5000); // 5 seconds
            }
        }
    </script>
</head>
<body onload="hideAlert()">
<div class="container mt-5">
    <img src="Images/logo.png" class="center">
    <h2>Signup</h2>
    <form action="signup.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Signup</button><br><br>
        <a href="login.php">Already have account? Login</a>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);

    $conn = new mysqli("localhost", "root", "", "product");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "<div class='alert alert-success mt-1'>Signup successful! <a href='login.php'>Login here</a>.</div>";
    } else {
        echo "<div class='alert alert-danger mt-3'>Signup failed: " . $stmt->error . "</div>";
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>
