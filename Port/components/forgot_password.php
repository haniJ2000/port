<?php
// Enable error reporting for debugging (should be turned off in production for security reasons)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Require configuration file to establish database connection
require '../Config.php'; 
use PHPMailer\PHPMailer\PHPMailer;

// Check if the request method is POST (Server-side validation starts here)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Sanitization and Validation: Clean and validate user input (Prevents SQL injection and XSS)
    $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
    
    // Ensure email is valid to prevent invalid input from being processed
    if (!$email) {
        // XSS Prevention: Safely output to avoid malicious scripts
        echo "<script>alert('Invalid email address.');window.location.href='forgot_password.php';</script>";
        exit;
    }

    try {
        // Use Parameterized Queries to prevent SQL Injection attacks
        // Check if the provided email exists in the database (SQL Injection protection)
        $stmt = $conn->prepare("SELECT BR_Number FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            // If email exists, generate OTP and set expiry time
            $BR_Number = $user['BR_Number'];
            $otp = rand(100000, 999999); // Random OTP generation
            $expiry = date('Y-m-d H:i:s', strtotime('+15 minutes')); // OTP expires in 15 minutes (Time-based access control)

            // Insert OTP into the password_resets table with a flag for verification (SQL Injection prevention)
            $stmt = $conn->prepare("INSERT INTO password_resets (BR_Number, otp, otp_expiry, otp_verified) VALUES (?, ?, ?, 0)");
            $stmt->execute([$BR_Number, $otp, $expiry]);

            // Secure Password Management: Use OTP for two-factor authentication during password reset
            require '../vendor/autoload.php';
            $mail = new PHPMailer();
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            
            // Store sensitive data like username/password in environment variables
            $mail->Username = ''; // Should use environment variables
            $mail->Password = '';      // Should use environment variables
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
            $mail->Port = ;

            // Configure email sender and receiver
            $mail->setFrom('from@example.com', 'Mailer');
            $mail->addAddress($email);
            $mail->Subject = 'Password Reset OTP';
            $mail->Body = "Your OTP for password reset is: $otp. It is valid for 15 minutes.";

            // Secure Error Handling for sending OTP
            try {
                if ($mail->send()) {
                    // Redirect to the reset password page after successful OTP delivery
                    echo "<script>alert('OTP has been sent to your email.');window.location.href='reset_password.php';</script>";
                } else {
                    throw new Exception('Failed to send OTP.');
                }
            } catch (Exception $e) {
                // Log error messages to the server (avoid displaying detailed errors to users for security)
                error_log($e->getMessage());
                echo "<script>alert('Failed to send OTP. Please try again later.');window.location.href='forgot_password.php';</script>";
            }
        } else {
            // Access Control: If email does not exist, deny further processing and show a generic error
            echo "<script>alert('Email not found.');window.location.href='forgot_password.php';</script>";
        }
    } catch (PDOException $e) {
        // Secure Error Handling: Log database errors for internal review
        error_log('PDOException: ' . $e->getMessage()); 
        echo "<script>alert('Database error: Please try again later.');window.location.href='forgot_password.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../assets/css/forgot_password.css" />
    
</head>
<body>
    <div class="container">
    <img src="../assets/img/kaiadmin/logo.png" alt="navbar brand" class="navbar-brand" />
        <h1>Forgot Password</h1>
        <p class="instructions">Please enter the email address you used during registration to receive the OTP for password reset.</p>
        <!-- Form for requesting OTP (Client-side validation for required email field) -->
        <form action="forgot_password.php" method="POST">
            <input type="email" name="email" placeholder="Enter your email" required>
            <button type="submit">Send OTP</button>
        </form>
    </div>
</body>
</html>