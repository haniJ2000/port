<?php
require '../Config.php';  // Database configuration and management (CIA: Confidentiality - Only authorized access to the database)
use PHPMailer\PHPMailer\PHPMailer;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitization and Validation: Clean and validate input to prevent XSS and SQL Injection (CIA: Integrity)
    $BR_Number = htmlspecialchars(trim($_POST['BR_Number']));              // Sanitize to prevent XSS attacks
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL); // Sanitize email input
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Server-side validation (AAA: Authentication & Authorization, CIA: Integrity)
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format.');window.location.href='register.php';</script>";
        exit(); // Stop further execution on invalid data
    }
    if ($password !== $confirmPassword) {
        echo "<script>alert('Passwords do not match.');window.location.href='register.php';</script>";
        exit(); // Stop further execution if passwords don't match
    }
    if (strlen($password) < 8 || !preg_match("/[A-Z]/", $password) || !preg_match("/[a-z]/", $password) || !preg_match("/[0-9]/", $password) || !preg_match("/[\W_]/", $password)) {
        echo "<script>alert('Password must be at least 8 characters long and include uppercase, lowercase, numbers, and special characters.');window.location.href='register.php';</script>";
        exit(); // Stop further execution if password doesn't meet the security standards
    }

    // Use of Parameterized Queries (SQL Injection protection)
    $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE BR_Number = ? OR email = ?");
    $stmt->execute([$BR_Number, $email]); // Prevents SQL Injection by using bound parameters
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo "<script>alert('BR_Number or email already exists.');window.location.href='register.php';</script>";
        exit();
    }

    
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT); 


    $otp = rand(100000, 999999);  
    

    // SQL Injection protection via prepared statements (SQL Protection)
    $stmt = $conn->prepare("INSERT INTO users (BR_Number, email, password, otp, role) VALUES (?, ?, ?, ?, 'user')");
    if ($stmt->execute([$BR_Number, $email, $hashedPassword, $otp])) {
        // Send OTP via email (CIA: Confidentiality - Ensuring email transport security)
        require '../vendor/autoload.php';
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // SMTP host (ensure secure email server)
        $mail->SMTPAuth = true;
        $mail->Username = ''; // Sensitive data, consider storing in environment variables
        $mail->Password = ''; // Never hard-code credentials in production
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use strong encryption for email communication (CIA: Confidentiality)
        $mail->Port =; // Secure port for email transmission
        $mail->setFrom('from@example.com', 'Mailer'); // Set a valid sender email
        $mail->addAddress($email); // Recipient email
        $mail->Subject = 'OTP Verification'; // Subject of the email
        $mail->Body = "Your OTP is: $otp"; // OTP for account verification (AAA: Authentication)
        $mail->send(); // Send the email securely

        // Session Management (CIA: Confidentiality & Integrity)
        session_start(); // Ensure session is started securely for storing sensitive session data
        $_SESSION['otp_email'] = $email; // Store email in session for OTP verification

        // Redirect to OTP verification page (CIA: Availability)
        header("Location: otp_verify.php");
        exit(); // Ensure no further script execution
    } else {
        // Secure error handling (no sensitive details exposed) (CIA: Confidentiality)
        echo "<script>alert('Registration failed.');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/register.css" />
    <script>
        function togglePassword(id) {
            const passwordField = document.getElementById(id);
            const passwordFieldType = passwordField.getAttribute('type');
            if (passwordFieldType === 'password') {
                passwordField.setAttribute('type', 'text');
                document.getElementById(id + '_icon').textContent = '🙈';
            } else {
                passwordField.setAttribute('type', 'password');
                document.getElementById(id + '_icon').textContent = '👁️';
            }
        }

        function checkPasswordStrength(password) {
            let strength = "Weak";
            let color = "red";
            
            if (password.length >= 8 && /[A-Z]/.test(password) && /[a-z]/.test(password) && /[0-9]/.test(password) && /[\W_]/.test(password)) {
                strength = "Strong";
                color = "green";
            } else if (password.length >= 6) {
                strength = "Moderate";
                color = "yellow";
            }
            
            return { strength, color };
        }

        function updatePasswordStrength() {
            const password = document.getElementById("password").value;
            const strengthInfo = checkPasswordStrength(password);
            const strengthText = document.getElementById("password-strength-text");

            strengthText.textContent = strengthInfo.strength;
            strengthText.style.color = strengthInfo.color;
        }
    </script>
</head>
<body>
    <div class="container">
        <img src="../assets/img/kaiadmin/logo.png" alt="navbar brand" class="navbar-brand" />
        <h1>Register</h1>
        <form method="POST" action="register.php" onsubmit="return validateForm()">
            <p>Business Registration Number</p>
            <input type="text" name="BR_Number" placeholder="BR Number" required>
            <p>Email</p>
            <input type="email" name="email" placeholder="Email" required>
            <div class="password-container">
                <p>Password</p>
                <input type="password" name="password" id="password" placeholder="Password" oninput="updatePasswordStrength()" required>
                <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
            </div>
            <div class="password-container">
                <p>Confirm Password</p>
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                <span class="toggle-password" onclick="togglePassword('confirm_password')">👁️</span>
            </div>
            <div id="password-strength-text" class="password-strength"></div>
            <div class="password-instructions">
                Password must be at least 8 characters long, contain uppercase and lowercase letters, numbers, and special characters.
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>
