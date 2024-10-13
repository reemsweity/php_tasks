<?php
$users=['email' => 'reem@gmail.com',
    'password' => 'Reem@2001'];
$email = $password = $phone = "";
$emailError = $passwordError = $phoneError = $passwordError2 = "";
$isValid = true; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['email'])) {
        $emailError = "Email is required";
        $isValid = false;
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailError = "Invalid email format";
            $isValid = false;
        }
    }

 
    if (empty($_POST['password'])) {
        $passwordError = "Password is required";
        $isValid = false;
    } elseif (strlen($_POST['password']) < 8) {
        $passwordError = "Password must be at least 8 characters long";
        $isValid = false;
    } elseif (!preg_match('/[A-Z]/', $_POST['password'])) {
        $passwordError = "Password must contain at least one uppercase letter";
        $isValid = false;
    } elseif (!preg_match('/[a-z]/', $_POST['password'])) {
        $passwordError = "Password must contain at least one lowercase letter";
        $isValid = false;
    } elseif (!preg_match('/[0-9]/', $_POST['password'])) {
        $passwordError = "Password must contain at least one number";
        $isValid = false;
    } elseif (!preg_match('/[\W]/', $_POST['password'])) {
        $passwordError = "Password must contain at least one special character";
        $isValid = false;
    } elseif (preg_match('/\s/', $_POST['password'])) {
        $passwordError = "Password cannot contain spaces";
        $isValid = false;
    } else {
        $password = $_POST['password'];
    }

 
    if (empty($_POST['confirmPassword'])) {
        $passwordError2 = "Password confirmation is required";
        $isValid = false;
    } elseif ($_POST['password'] != $_POST['confirmPassword']) {
        $passwordError2 = "Passwords do not match";
        $isValid = false;
    }

   
    if (empty($_POST['phone'])) {
        $phoneError = "Phone number is required";
        $isValid = false;
    } elseif (strlen($_POST['phone']) < 14) {
        $phoneError = "Phone number must be at least 14 digits long";
        $isValid = false;
    } else {
        $phone = $_POST['phone'];
    }

    
    if ($isValid) {
        $users[] = [
            'email' => $email,
            'phone' => $phone,
            'password' => $password,
       
        
        ];
        header("Location: login.php");
        exit();
        echo "Registration successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Sign Up</h1>
        <form action="" method="POST">
           
            <div>
                <label for="email">Email:</label><br>
                <input type="email" name="email" id="" value="<?php echo htmlspecialchars($email); ?>">
                <span style="color: red;"><?php echo $emailError ?></span>
            </div>

          
            <div>
                <label for="phone">Phone:</label><br>
                <input type="number" name="phone" id="" value="<?php echo htmlspecialchars($phone); ?>">
                <span style="color: red;"><?php echo $phoneError ?></span>
            </div>

          
            <div>
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="" required>
                <span style="color: red;"><?php echo $passwordError ?></span>
            </div>

            
            <div>
                <label for="confirmPassword">Confirm Password:</label><br>
                <input type="password" name="confirmPassword" id="" required>
                <span style="color: red;"><?php echo $passwordError2; ?></span>
            </div>

           
            <div>
                <input type="submit" name="Register" value="Register" class="btn2 btn" required>
            </div>
        </form>
        <h5>Already have an account? <a href="login.php">Login</a></h5>
    </div>
</body>
</html>
