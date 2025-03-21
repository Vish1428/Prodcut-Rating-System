<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - True Ratings</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"href="login.css"/>
    <script>
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
    <h2>Login</h2>
    <form action="login.php" method="POST">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button><br><br>
        <a href="forgetpassword.php">Forget Password?</a><br>
        <a href="SignUp.php">Don't have an Account? SignUp here</a>
    </form>
</div>

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $conn = new mysqli("localhost", "root", "", "product");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $hashed_password);

    if ($stmt->num_rows > 0) {
        $stmt->fetch();
        if (password_verify($password, $hashed_password)) {
            $_SESSION["user_id"] = $id;
            header("Location: index.php");
            exit();
        } else {
            echo "<div class='alert alert-danger mt-3' id='alert'>Invalid password.</div>";
        }
    } else {
        echo "<div class='alert alert-danger mt-3' id='alert'>No account found with that username.</div>";
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>
