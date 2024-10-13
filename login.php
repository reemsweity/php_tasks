<?php

$users = []; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

   
    $user_found = false;
    foreach ($users as $user) {
        if ($user['email'] === $email && $user['password'] === $password) {
            $user_found = true;
            break;
        }
    }

    if ($user_found) {
        header("Location: task6.php?email=" . urlencode($email)); // Correct redirection
        exit();
    } else {
        $error = "Invalid email or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($error)): ?>
            <div class="alert alert-danger"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <form action="login.php" method="POST">
            <label>Email:</label><br>
            <input type="email" name="email" required><br>
            <label>Password:</label><br>
            <input type="password" name="password" required><br>
            <input type="submit" value="Login" class="btn1 btn">
        </form>
        <div>
            <h5>Don't have an account? <a href="signup.php">Sign Up</a></h5>
        </div>
    </div>
</body>
</html>
