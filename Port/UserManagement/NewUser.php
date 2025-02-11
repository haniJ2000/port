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
        $mail->Port = ; // Secure port for email transmission
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Tables - Kaiadmin Bootstrap 5 Admin Dashboard</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="../assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />

    <!-- Fonts and icons -->
    <script src="../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
      WebFont.load({
        google: { families: ["Public Sans:300,400,500,600,700"] },
        custom: {
          families: [
            "Font Awesome 5 Solid",
            "Font Awesome 5 Regular",
            "Font Awesome 5 Brands",
            "simple-line-icons",
          ],
          urls: ["../assets/css/fonts.min.css"],
        },
        active: function () {
          sessionStorage.fonts = true;
        },
      });



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

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />
    <link rel="stylesheet" href="../assets/css/NewUser.css" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../assets/css/demo.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
  </head>
  <body>
    <div class="wrapper">
      <!-- Sidebar -->
      <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
          <!-- Logo Header -->
          <div class="logo-header" data-background-color="dark">
            <a href="../index.php" class="logo">
            <img
                src="../assets/img/kaiadmin/logo_icon.png"
                alt="navbar brand"
                class="navbar-brand"
                width= "170px "
                height= "auto"
                
              />
            </a>
            <div class="nav-toggle">
              <button class="btn btn-toggle toggle-sidebar">
                <i class="gg-menu-right"></i>
              </button>
              <button class="btn btn-toggle sidenav-toggler">
                <i class="gg-menu-left"></i>
              </button>
            </div>
            <button class="topbar-toggler more">
              <i class="gg-more-vertical-alt"></i>
            </button>
          </div>
          <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
          <div class="sidebar-content">
            <ul class="nav nav-secondary">
              <li class="nav-item">
                <a
                  data-bs-toggle="collapse"
                  href="#dashboard"
                  class="collapsed"
                  aria-expanded="false"
                >
                  <i class="fas fa-home"></i>
                  <p>Dashboard</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="dashboard">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../../demo1/index.php">
                        <span class="sub-item">Dashboard 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
             
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#base">
                <i class="fa-solid fa-users"></i>
                  <p>User Management</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="base">
                  <ul class="nav nav-secondary">
                    <li>
                      <a href="../components/avatars.html">
                      <i class="fa-solid fa-pen-to-square"></i>
                        <span class="sub-item">New User</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/buttons.html">
                      <i class="fa-solid fa-pen-to-square"></i>
                        <span class="sub-item">Change Password</span>
                      </a>
                    </li>
                    <li>
                      <a href="../components/gridsystem.html">
                      <i class="fa-solid fa-pen-to-square"></i>
                        <span class="sub-item">New Passsword</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#sidebarLayouts">
                <i class="fa-solid fa-id-card"></i>
                  <p>Licences</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="sidebarLayouts">
                  <ul class="nav nav-secondary">
                  <li>
                      <a href="RepairLicence.php">
                      <i class="fa-solid fa-anchor"></i>
                        <span class="sub-item">Repairs Licence</span>
                      </a>
                    </li>
                    <li>
                      <a href="ChandlingLicence.php">
                      <i class="fa-solid fa-anchor"></i>
                        <span class="sub-item">Chandling Licence</span>
                      </a>
                    </li>
                    <li>
                      <a href="HarbourCraftLicence.php">
                      <i class="fa-solid fa-anchor"></i>
                        <span class="sub-item">Harbour Craft Licence</span>
                      </a>
                    </li>
                    <li>
                      <a href="SurveyLicence.php">
                      <i class="fa-solid fa-anchor"></i>
                        <span class="sub-item">Servey Licence</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#forms">
                  <i class="fas fa-pen-square"></i>
                  <p>Forms</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="forms">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../forms/forms.html">
                        <span class="sub-item">Basic Form</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#maps">
                  <i class="fas fa-map-marker-alt"></i>
                  <p>Maps</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="maps">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../maps/googlemaps.html">
                        <span class="sub-item">Google Maps</span>
                      </a>
                    </li>
                    <li>
                      <a href="../maps/jsvectormap.html">
                        <span class="sub-item">Jsvectormap</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#charts">
                  <i class="far fa-chart-bar"></i>
                  <p>Charts</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="charts">
                  <ul class="nav nav-collapse">
                    <li>
                      <a href="../charts/charts.html">
                        <span class="sub-item">Chart Js</span>
                      </a>
                    </li>
                    <li>
                      <a href="../charts/sparkline.html">
                        <span class="sub-item">Sparkline</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <li class="nav-item">
                <a href="../widgets.html">
                  <i class="fas fa-desktop"></i>
                  <p>Widgets</p>
                  <span class="badge badge-success">4</span>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../../documentation/index.php">
                  <i class="fas fa-file"></i>
                  <p>Documentation</p>
                  <span class="badge badge-secondary">1</span>
                </a>
              </li>
              <li class="nav-item">
                <a data-bs-toggle="collapse" href="#submenu">
                  <i class="fas fa-bars"></i>
                  <p>Menu Levels</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse" id="submenu">
                  <ul class="nav nav-collapse">
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav1">
                        <span class="sub-item">Level 1</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav1">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a data-bs-toggle="collapse" href="#subnav2">
                        <span class="sub-item">Level 1</span>
                        <span class="caret"></span>
                      </a>
                      <div class="collapse" id="subnav2">
                        <ul class="nav nav-collapse subnav">
                          <li>
                            <a href="#">
                              <span class="sub-item">Level 2</span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li>
                    <li>
                      <a href="#">
                        <span class="sub-item">Level 1</span>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- End Sidebar -->

      <div class="main-panel">
        <div class="main-header">
          <div class="main-header-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
              <a href="../index.php" class="logo">
                <img
                  src="../assets/img/kaiadmin/logo_light.svg"
                  alt="navbar brand"
                  class="navbar-brand"
                  height="20"
                />
              </a>
              <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                  <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                  <i class="gg-menu-left"></i>
                </button>
              </div>
              <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
              </button>
            </div>
            <!-- End Logo Header -->
          </div>
         <!-- Navbar Header -->
<nav
  class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom fixed-top bg-white"
>
  <div class="container-fluid">
    <nav
      class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex"
    >
      <div class="input-group">
        <div class="input-group-prepend">
          <!-- Add any desired icons or inputs here -->
        </div>
        <!-- Add your input/search bar here -->
      </div>
    </nav>
  </div>
</nav>
<!-- End Navbar -->

        </div>

        <div class="container">
    <div class="page-inner">
        <div class="header">
            <span class="title">New User</span>
        </div>
        <form method="POST" action="register.php" onsubmit="return validateForm()">
            <div class="left">
                <p class="para">Business Registration Number</p>
                <input type="text" name="BR_Number" placeholder="BR Number" required>
                <p class="para">Email</p>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="right">
                <div class="password-container">
                    <p class="para">Password</p>
                    <input type="password" name="password" id="password" placeholder="Password" oninput="updatePasswordStrength()" required>
                    <span class="toggle-password" onclick="togglePassword('password')">👁️</span>
                </div>
                <div class="password-container">
                    <p class="para">Confirm Password</p>
                    <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                    <span class="toggle-password" onclick="togglePassword('confirm_password')">👁️</span>
                </div>
                <div id="password-strength-text" class="password-strength"></div>
                <div class="password-instructions">
                    Password must be at least 8 characters long, contain uppercase and lowercase letters, numbers, and special characters.
                </div>
            </div>
            <div class="button-container">
                <button type="reset">Cancel</button>
                <button type="submit">Add User</button>
            </div>
        </form>
    </div>
</div>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <!-- Kaiadmin JS -->
    <script src="../assets/js/kaiadmin.min.js"></script>
    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../assets/js/setting-demo2.js"></script>
    <script>
      $("#displayNotif").on("click", function () {
        var placementFrom = $("#notify_placement_from option:selected").val();
        var placementAlign = $("#notify_placement_align option:selected").val();
        var state = $("#notify_state option:selected").val();
        var style = $("#notify_style option:selected").val();
        var content = {};

        content.message =
          'Turning standard Bootstrap alerts into "notify" like notifications';
        content.title = "Bootstrap notify";
        if (style == "withicon") {
          content.icon = "fa fa-bell";
        } else {
          content.icon = "none";
        }
        content.url = "index.html";
        content.target = "_blank";

        $.notify(content, {
          type: state,
          placement: {
            from: placementFrom,
            align: placementAlign,
          },
          time: 1000,
        });
      });
    </script>
  </body>
</html>
