<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Ship Chandling License Application</title>
    <meta
      content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
      name="viewport"
    />
    <link
      rel="icon"
      href="../assets/img/kaiadmin/favicon.ico"
      type="image/x-icon"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

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
   
    <link rel="stylesheet" href="../assets/css/repairs.css" />
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
            <h3 class="fw-bold mb-3"> APPLICATION FOR LICENCE TO UNDERTAKE SHIP - CHANDLING IN ANY PORT </h3>
            </div>
            <form action="process_license.php" method="POST">
                    <div class="mb-3">
                        <label for="applicant_name" class="form-label">Name of Applicant</label>
                        <input type="text" id="applicant_name" name="applicant_name" class="form-control" style="text-transform: uppercase;"  pattern="[A-Za-z\s]+" title="Only letters are allowed" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')" placeholder="Enter your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="business_name" class="form-label">Business Name</label>
                        <input type="text" id="business_name" name="business_name" class="form-control" style="text-transform: uppercase;"  pattern="[A-Za-z\s]+" title="Only letters are allowed" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')" placeholder="Enter business name" required>
                    </div>
                    <div class="mb-3">
                        <label for="directors" class="form-label">Names of Directors</label>
                        <input type="text" id="directors" name="directors" class="form-control" placeholder="Enter directors' names" required>
                    </div>
                    <div class="mb-3">
                        <label for="citizenship" class="form-label">Citizenship</label>
                        <select id="citizenship" name="citizenship" class="form-select" required>
                            <option value="" disabled selected>Select citizenship</option>
                            <option value="sri_lankan">Sri Lankan</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label">Sri Lankan-owned</label>
                            <div class="form-check">
                                <input type="radio" id="ownership_yes" name="ownership" value="yes" class="form-check-input" required>
                                <label for="ownership_yes" class="form-check-label">Yes</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="ownership_no" name="ownership" value="no" class="form-check-input" required>
                                <label for="ownership_no" class="form-check-label">No</label>
                            </div>
                            <div class="form-check">
                                <input type="radio" id="ownership_part" name="ownership" value="part" class="form-check-input">
                                <label for="ownership_part" class="form-check-label">Part</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="registration_number" class="form-label">Company Registration Number</label>
                            <input type="number" id="registration_number" name="registration_number" class="form-control"  placeholder="Enter registration number" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="harbors_number" class="form-label">Harbors Membership Number</label>
                        <input type="text" id="harbors_number" name="harbors_number" class="form-control" placeholder="Enter harbors membership number" required>
                    </div>
                    <div class="mb-3">
                        <label for="specified_port" class="form-label">Specified Port</label>
                        <input type="text" id="specified_port" name="specified_port" class="form-control" placeholder="Enter specified port" required>
                    </div>
                    <div class="mb-3">
                        <label for="head_office_address" class="form-label">Company Head Office Address</label>
                        <input type="text" id="head_office_address" name="head_office_address" class="form-control" placeholder="Enter head office address" required>
                    </div>
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label for="apply_date" class="form-label">Applying Date</label>
                            <input type="date" id="apply_date" name="apply_date" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" id="end_date" name="end_date" class="form-control" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="shipping_agent" class="form-label">Shipping Agent Name</label>
                        <input type="text" id="shipping_agent" name="shipping_agent" class="form-control" placeholder="Enter shipping agent name" required>
                    </div>
                    <div class="mb-3">
                        <label for="telephone" class="form-label">Telephone Number</label>
                        <input type="number" id="telephone" name="telephone" class="form-control" placeholder="Enter telephone number" required>
                    </div>
                    <div class="mb-3">
                        <label for="license_number" class="form-label">Number of License</label>
                        <input type="number" id="license_number" name="license_number" class="form-control" placeholder="Enter license number (if any)">
                    </div>
                    <div class="mb-3">
                        <label for="issue_date" class="form-label">Date of Issue</label>
                        <input type="date" id="issue_date" name="issue_date" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="shipping_line" class="form-label">Shipping Line</label>
                        <input type="text" id="shipping_line" name="shipping_line" class="form-control" placeholder="Enter shipping line">
                    </div>
                    <hr>
                    <h2 class="mb-4">Upload Required Documents</h2>
                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>Document Name</th>
                                <th>Browse</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Business Registration Form 01 OR 20</td>
                                <td><input type="file" class="form-control" name="business_registration" required></td>
                            </tr>
                            <tr>
                                <td>Agent letter for respective year</td>
                                <td><input type="file" class="form-control" name="agent_letter" required></td>
                            </tr>
                            <tr>
                                <td>Membership of Sri Lanka Ship Suppliers Association</td>
                                <td><input type="file" class="form-control" name="membership_certificate" required></td>
                            </tr>
                            <tr>
                                <td>Request Letter to Harbour Master</td>
                                <td><input type="file" class="form-control" name="request_letter" required></td>
                            </tr>
                            <tr>
                                <td>Company Act Article</td>
                                <td><input type="file" class="form-control" name="company_act" required></td>
                            </tr>
                            <tr>
                                <td>Experience Letter</td>
                                <td><input type="file" class="form-control" name="experience_letter" required></td>
                            </tr>
                            <tr>
                                <td>A List of Workmen (Include Name/NIC No./Designation/Tel. No.)</td>
                                <td><input type="file" class="form-control" name="workmen_list" required></td>
                            </tr>
                            <tr>
                                <td>Issue Licence</td>
                                <td><input type="file" class="form-control" name="issue_license" required></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    <div class="mt-3">
                        <button type="reset" class="btn btn-danger">Cancel</button>
                     
                    <button type="submit" class="btn btn-primary">Submit Application</button>
                </form>
   
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
