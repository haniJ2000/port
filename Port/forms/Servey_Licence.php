<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitize and validate form data
  $errors = [];
  $applicantName = htmlspecialchars(trim($_POST['applicant_name']));
  $citizen = isset($_POST['citizen']) ? htmlspecialchars($_POST['citizen']) : '';
  $citizenType = htmlspecialchars(trim($_POST['citizen_type']));
  $bizName = htmlspecialchars(trim($_POST['biz_name']));
  $directors = htmlspecialchars(trim($_POST['directors']));
  $shareCapital = htmlspecialchars(trim($_POST['share_capital']));
  $regNo = htmlspecialchars(trim($_POST['reg_no']));
  $addrLine1 = htmlspecialchars(trim($_POST['addr_line1']));
  $addrLine2 = htmlspecialchars(trim($_POST['addr_line2']));
  $ports = isset($_POST['ports']) ? $_POST['ports'] : [];
  $licenseDur = htmlspecialchars(trim($_POST['license_dur']));
  $licenseYear = htmlspecialchars(trim($_POST['license_year']));
  $licensePurpose = htmlspecialchars(trim($_POST['license_purpose']));
  $certDate = htmlspecialchars(trim($_POST['cert_date']));
  $tel = htmlspecialchars(trim($_POST['tel']));

  // Validate form fields
  if (empty($applicantName)) {
      $errors[] = "Applicant Name are required.";
  }
  if (empty($citizen)) {
      $errors[] = "Please specify if you are a Sri Lankan citizen.";
  }
  if ($citizen == "Yes" && empty($citizenType)) {
      $errors[] = "Citizenship type is required if you are a Sri Lankan citizen.";
  }
  if (empty($bizName)) {
      $errors[] = "Business Name is required.";
  }
  if (empty($shareCapital)) {
      $errors[] = "Please specify the share capital ownership.";
  }
  if (empty($regNo)) {
      $errors[] = "Company Registration Number is required.";
  }
  if (empty($addrLine1)) {
      $errors[] = "Business Address is required.";
  }
  if (empty($ports)) {
      $errors[] = "At least one port must be selected.";
  }
  if (empty($licenseDur)) {
      $errors[] = "Please specify the license duration.";
  }
  if (empty($licenseYear)) {
      $errors[] = "Please select a license start year.";
  }
  if (empty($licensePurpose)) {
      $errors[] = "License purpose is required.";
  }
  if (!preg_match('/^\d{10,15}$/', $tel)) {
      $errors[] = "Please provide a valid telephone number (10-15 digits).";
  }

  // If no errors, display form data
  if (empty($errors)) {
      echo "<h2>Application Submitted Successfully</h2>";
      echo "<p><strong>Applicant Name:</strong> $applicantName</p>";
      echo "<p><strong>Sri Lankan Citizen:</strong> $citizen</p>";
      if ($citizen == "Yes") {
          echo "<p><strong>Citizenship Type:</strong> $citizenType</p>";
      }
      echo "<p><strong>Business Name:</strong> $bizName</p>";
      echo "<p><strong>Directors/Proprietors/Partners:</strong> $directors</p>";
      echo "<p><strong>Share Capital Ownership:</strong> $shareCapital</p>";
      echo "<p><strong>Company Registration Number:</strong> $regNo</p>";
      echo "<p><strong>Business Address:</strong> $addrLine1, $addrLine2</p>";
      echo "<p><strong>Ports:</strong> " . implode(", ", $ports) . "</p>";
      echo "<p><strong>License Duration:</strong> $licenseDur</p>";
      echo "<p><strong>License Start Year:</strong> $licenseYear</p>";
      echo "<p><strong>License Purpose:</strong> $licensePurpose</p>";
      echo "<p><strong>Certificate Issue Date:</strong> $certDate</p>";
      echo "<p><strong>Telephone Number:</strong> $tel</p>";
      exit();
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
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../assets/css/kaiadmin.min.css" />
   
    <link rel="stylesheet" href="../assets/css/SurveyLicence.css" />
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
                      <a href="Repairs_Licence.php">
                      <i class="fa-solid fa-anchor"></i>
                        <span class="sub-item">Repairs Licence</span>
                      </a>
                    </li>
                    <li>
                      <a href="Chandling_Licence.php">
                      <i class="fa-solid fa-anchor"></i>
                        <span class="sub-item">Chandling Licence</span>
                      </a>
                    </li>
                    <li>
                      <a href="HarbourCraft_Licence.php">
                      <i class="fa-solid fa-anchor"></i>
                        <span class="sub-item">Harbour Craft Licence</span>
                      </a>
                    </li>
                    <li>
                      <a href="Servey_Licence.php">
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
              <li class="nav-item active submenu">
                <a data-bs-toggle="collapse" href="#tables">
                  <i class="fas fa-table"></i>
                  <p>Tables</p>
                  <span class="caret"></span>
                </a>
                <div class="collapse show" id="tables">
                  <ul class="nav nav-collapse">
                    <li class="active">
                      <a href="../tables/tables.html">
                        <span class="sub-item">Basic Table</span>
                      </a>
                    </li>
                    <li>
                      <a href="../tables/datatables.html">
                        <span class="sub-item">Datatables</span>
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
            <div class="page-header">
            <h3 class="fw-bold mb-3">Surveying & Weighing Services for Vessels and Goods Application Form</h3>
            </div>
           
                <form method="POST" action="submit_application.php" enctype="multipart/form-data">
        <h2>Application Form</h2>

        <label for="applicant_name">Applicant Name: <span class="required">*</span></label>
        <input type="text" id="applicant_name" name="applicant_name" placeholder="Enter Applicant Name" required>

        <label>Are you a Sri Lankan citizen? <span class="required">*</span></label>
        <div class="radio-group">
            <input type="radio" id="citizen_yes" name="citizen" value="Yes">
            Yes

            <input type="radio" id="citizen_no" name="citizen" value="No">
            No
        </div>

        <label for="citizen_type">If yes, how (descent or registration)?</label>
        <input type="text" id="citizen_type" name="citizen_type" placeholder="Enter descent or registration" required>

        <label for="biz_name">Business Name: <span class="required">*</span></label>
        <input type="text" id="biz_name" name="biz_name" required placeholder="Enter Business Name">

        <label for="directors">Directors, Proprietors, or Partners Name:</label>
        <textarea id="directors" name="directors" rows="5"></textarea>

        <label for="share_capital">Is the share capital fully or partly owned by Sri Lankans? <span class="required">*</span></label>
        <select id="share_capital" name="share_capital" required>
            <option value="">--Select an option--</option>
            <option value="Fully Owned">Fully Owned</option>
            <option value="Partly Owned">Partly Owned</option>
            <option value="Not Owned">Not Owned</option>
        </select>

        <label for="reg_no">Company Registration Number: <span class="required">*</span></label>
        <input type="text" id="reg_no" name="reg_no" required placeholder="Enter Company Registration Number">

        <label for="addr_line1">Business Address: <span class="required">*</span></label>
        <input type="text" id="addr_line1" name="addr_line1" placeholder="Address Line 1" required>
        <input type="text" id="addr_line2" name="addr_line2" placeholder="Address Line 2">

        <label>Name of the specified port/ports: <span class="required">*</span></label>
        <div class="checkbox-group">
            <input type="checkbox" id="colombo" name="ports[]" value="Colombo">Colombo
            <input type="checkbox" id="trincomalee" name="ports[]" value="Trincomalee">Trincomalee
            <input type="checkbox" id="galle" name="ports[]" value="Galle">Galle
        </div>

        <label for="license_dur">License Duration: <span class="required">*</span></label>
        <select id="license_dur" name="license_dur" required>
            <option value="">--Select Duration--</option>
            <option value="1_year">1 Year</option>
            <option value="2_years">2 Years</option>
            <option value="3_years">3 Years</option>
        </select>

        <label for="license_year">License Start Year: <span class="required">*</span></label>
        <select id="license_year" name="license_year" required>
            <option value="">--Select Year--</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
        </select>

        <label for="license_purpose">License Purpose:</label>
        <textarea id="license_purpose" name="license_purpose" placeholder="Enter License Purpose" required></textarea>

        <label for="cert_date">Certificate Issue Date (from Ceylon Chamber of Commerce):</label>
        <input type="date" id="cert_date" name="cert_date">

        <label for="tel">Telephone Number: <span class="required">*</span></label>
        <input type="tel" id="tel" name="tel" placeholder="Enter a valid phone number" pattern="\d{10,15}" required>

        <hr>

        <h2>Upload Required Documents</h2>
        <table>
            <thead>
                <tr>
                    <th>Document Name</th>
                    <th>Choose File</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Business Registration with Form 1 or 20</td>
                    <td><input type="file" id="BusiReg" name="BusiReg" accept=".pdf" required></td>
                </tr>
                <tr>
                    <td>Chamber of Commerce Registration</td>
                    <td><input type="file" id="COCReg" name="COCReg" accept=".pdf" required></td>
                </tr>
                <tr>
                    <td>Chamber Qualification Certificate Copy</td>
                    <td><input type="file" id="CQCerifciate" name="CQCerifciate" accept=".pdf" required></td>
                </tr>
                <tr>
                    <td>Form B (Allowed Only 07 Members)</td>
                    <td><input type="file" id="FormB" name="FormB" accept=".pdf" required></td>
                </tr>
                <tr>
                    <td>Request Letter for Harbour Master</td>
                    <td><input type="file" id="ReqLetter" name="ReqLetter" accept=".pdf" required></td>
                </tr>
            </tbody>
        </table>
        <div class="button-container">
        <button type="reset" class="btn btn-danger" >Cancel</button>
        <button type="submit">Submit Application and Documents</button>
    </div>

    </form>
        </div>

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
