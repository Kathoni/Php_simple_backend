<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    try {
        $stmt = $pdo->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->execute([$username, $password]);
        header('Location: index.php');
        exit;
    } catch (PDOException $e) {
        $error = "Username already exists!";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
<div class="login">
    <h1>Sign Up</h1>
    <form method="POST">
        <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
        <label>Username:</label>
        <input type="text" name="username" required><br>
        <label>Password:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Sign Up">
    </form>
    <p>Already have an account? <a href="index.php">Login</a></p>
</div>
</body>
</html>
