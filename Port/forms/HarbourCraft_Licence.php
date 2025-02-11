
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
            <h3 class="fw-bold mb-3">Application for a License to PLY A</h3>
            </div>
            <form>
                <div class="mb-3">
                    <label class="form-label">Application for a License to PLY A</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">In the Port of</label>
                    <select class="form-select">
                        <option selected disabled>Choose Port</option>
                        <option>All Ports</option>
                        <option>Colombo</option>
                        <option>Galle</option>
                        <option>Trinco</option>
                    </select>
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Applicant Name</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Business Name of Applicant</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Address where the Principal Office of the applicant is situated</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Craft in respect of which Licence is Sought</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Registered number of the Craft</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Purpose for which the Craft is to be used</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Registered tonnage of the Craft (as certified by the G.E. & S.S)</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Carrying capacity of the Craft (as certified by the G.E. & S.S.D & S.M.)</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Number of Crew who will man the craft</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Number of persons the Craft is to carry</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Name of the Driver of the Craft (if applicable)</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Name of the Tindal or Coxswain (as may case may be)</label>
                    <input type="text" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Names of Assistant Tindal / Coxswain or Boatman</label>
                    <input type="text" class="form-control">
                </div>
                
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
                    <td>Harbour Craft Ownership Details</td>
                    <td><input type="file" id="Owner_Details" name="Owner_Details" accept=".pdf" required></td>
                </tr>
                <tr>
                    <td>Survey Report From Director Of Merchant Shipping</td>
                    <td><input type="file" id="Survey_Report" name="Survey_Report" accept=".pdf" required></td>
                </tr>
                <tr>
                    <td>Request Letter for Harbour Master</td>
                    <td><input type="file" id="ReqLetter" name="ReqLetter" accept=".pdf" required></td>
                </tr>
                
                <tr>
                    <td>Coxswain Certificate & Engine Driver Certificate</td>
                    <td><input type="file" id="Coxwain_certi" name="Coxwain_certi" accept=".pdf" required></td>
                </tr>
                
                <tr>
                    <td>Insurance</td>
                    <td><input type="file" id="Insurance" name="Insurance" accept=".pdf" required></td>
                </tr>
                
                <tr>
                    <td>Harbour Craft Draft Document</td>
                    <td><input type="file" id="Draft_doc" name="Draft_doc" accept=".pdf" required></td>
                </tr>
            </tbody>
        </table>
        <br>
        <button type="reset" class="btn btn-danger">Cancel</button>
        <button type="submit">Submit Application and Documents</button>

            </form>

                
        </div>

      </div>

      
    </div>
    <!--   Core JS Files   -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
