<?php
require '../Config.php'; // Database connection


// Start session securely
if (session_status() === PHP_SESSION_NONE) {
    ini_set('session.cookie_httponly', 1);
    ini_set('session.cookie_secure', 1);
    session_start();
    session_regenerate_id(true);
}

// Function to log user activity
function logUserActivity($BR_Number, $activity) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO user_activity (user_id, activity, timestamp) VALUES (?, ?, NOW())");
    $stmt->execute([$BR_Number, $activity]);
}

// CSRF Protection
function generateCsrfToken() {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

function verifyCsrfToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

// Handle account lockout after failed attempts
function handleAccountLockout($BR_Number) {
    global $conn;
    $lockoutTime = (new DateTime())->add(new DateInterval('PT3M')); // 3-minute lockout

    $stmt = $conn->prepare("UPDATE users SET failed_attempts = 0, lockout_time = ? WHERE BR_Number = ?");
    $stmt->execute([$lockoutTime->format('Y-m-d H:i:s'), $BR_Number]);
}

$remainingLockoutTime = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || !verifyCsrfToken($_POST['csrf_token'])) {
        die('CSRF token validation failed.');
    }

    $BR_Number_or_email = htmlspecialchars(trim($_POST['BR_Number_or_email']));
    $password = htmlspecialchars($_POST['password']);

    if (empty($BR_Number_or_email) || empty($password)) {
        echo "<script>alert('Please fill in all fields.');</script>";
        exit;
    }

    $field = filter_var($BR_Number_or_email, FILTER_VALIDATE_EMAIL) ? 'email' : 'BR_Number';

    $stmt = $conn->prepare("SELECT BR_Number, email, password, role, otp_verified, failed_attempts, lockout_time FROM users WHERE $field = ?");
    $stmt->execute([$BR_Number_or_email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if ($user['lockout_time'] && new DateTime() < new DateTime($user['lockout_time'])) {
            $lockoutEnd = new DateTime($user['lockout_time']);
            $remainingLockoutTime = $lockoutEnd->getTimestamp() - (new DateTime())->getTimestamp();
            echo "<script>alert('Your account is temporarily locked. Try again after {$remainingLockoutTime} seconds.');</script>";
            exit;
        }

        if (password_verify($password, $user['password'])) {
            $stmt = $conn->prepare("UPDATE users SET failed_attempts = 0, lockout_time = NULL WHERE BR_Number = ?");
            $stmt->execute([$user['BR_Number']]);

            if ($user['otp_verified'] == 1) {
                $_SESSION['BR_Number'] = $user['BR_Number'];
                $_SESSION['user_role'] = $user['role'];

                logUserActivity($_SESSION['BR_Number'], 'Login');

                header("Location: Dashboard.php");
                exit();
            } else {
                echo "<script>alert('Your account has not been verified. Please verify your account via OTP.');</script>";
            }
        } else {
            $failedAttempts = $user['failed_attempts'] + 1;

            if ($failedAttempts >= 3) {
                handleAccountLockout($user['BR_Number']);
                echo "<script>alert('Your account has been locked due to multiple failed login attempts. Try again after 3 minutes.');</script>";
            } else {
                $stmt = $conn->prepare("UPDATE users SET failed_attempts = ? WHERE BR_Number = ?");
                $stmt->execute([$failedAttempts, $user['BR_Number']]);

                echo "<script>alert('Invalid password. Please try again.');</script>";
            }
        }
    } else {
        echo "<script>alert('Invalid BR_Number, email, or password.');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/Login.css" />
    <title>Login</title>
</head>
<body>
    <div class="container">
    <img src="../assets/img/kaiadmin/logo.png" alt="navbar brand" class="navbar-brand" />
        <h1>Login</h1>
        <form method="POST" onsubmit="return validateForm()">
            <input type="text" name="BR_Number_or_email" id="BR_Number_or_email" placeholder="BR_Number or Email" required>
            <div class="password-wrapper">
                <input type="password" name="password" id="password" placeholder="Password" required>
                <span class="toggle-password" id="password-icon" onclick="togglePassword()">👁️</span>
            </div>
            <input type="hidden" name="csrf_token" value="<?php echo generateCsrfToken(); ?>">
            <button type="submit">Login</button>
        </form>

        <div class="links">
            <a href="forgot_password.php">Forgot Password</a><br>
            <p>Don't have an account? <a href="Register.php">Sign Up</a></p>
        </div>
    </div>

    <script>
        function validateForm() {
            const BR_NumberOrEmail = document.getElementById('BR_Number_or_email').value;
            const password = document.getElementById('password').value;

            if (BR_NumberOrEmail.trim() === '' || password.trim() === '') {
                alert('All fields are required.');
                return false;
            }
            return true;
        }

        function togglePassword() {
            const passwordField = document.getElementById('password');
            const passwordIcon = document.getElementById('password-icon');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                passwordIcon.textContent = '🙈';
            } else {
                passwordField.type = 'password';
                passwordIcon.textContent = '👁️';
            }
        }
    </script>
</body>
</html>
