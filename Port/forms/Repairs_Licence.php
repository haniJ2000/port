<?php

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
            <h3 class="fw-bold mb-3">Application For Licence To Undertake Ship Repairing</h3>
            </div>
            
    <form action="submit_application.php" method="POST">

        <div class="form-group">
            <label for="company_name">Company Name: <span class="required">*</span></label>
            <input type="text" id="company_name" name="company_name" required placeholder="Enter Company Name" required>
        </div>

        <div class="form-group">
    <label>Specified Port Name: <span class="required">*</span></label>
    
    <div class="checkbox-group">
        <label class="checkbox-label">
            <input type="checkbox" name="port_name[]" value="Colombo"> Colombo
        </label>
        <label class="checkbox-label">
            <input type="checkbox" name="port_name[]" value="Galle"> Galle
        </label>
        <label class="checkbox-label">
            <input type="checkbox" name="port_name[]" value="Trincomalee"> Trincomalee
        </label>
        <label class="checkbox-label">
            <input type="checkbox" name="port_name[]" value="Kankasanthurai"> Kankasanthurai
        </label>
    
        <label class="checkbox-label">
            <input type="checkbox" name="port_name[]" value="Point Pedro"> Point Pedro
        </label>
        <label class="checkbox-label">
            <input type="checkbox" name="port_name[]" value="Oluvil"> Oluvil
        </label>
        <label class="checkbox-label">
            <input type="checkbox" name="port_name[]" value="Hambantota"> Hambantota
        </label>
    </div>
</div>

        

        <div class="form-group">
            <label for="directors_names">Directors’ Names:</label>
            <textarea id="directors_names" name="directors_names" rows="3" required placeholder="Enter Directors' Name" required></textarea>
        </div>

        <div class="form-group">
           
            <label for="share_capital">Is the share capital fully or partly owned by Sri Lankans? <span class="required">*</span></label>
            <select id="share_capital" name="share_capital" required>
            <option value="">--Select an option--</option>
            <option value="Fully Owned">Fully Owned</option>
            <option value="Partly Owned">Partly Owned</option>
            <option value="Not Owned">Not Owned</option>
            </select>
        </div>

        <div class="form-group">
            <label for="company_reg_number">Company Registration Number: <span class="required">*</span></label>
            <input type="text" id="company_reg_number" name="company_reg_number" required placeholder="Enter Company Registration Number: " required>
        </div>

        <div class="form-group">
            <label for="principal_office_address">Principal Office Address: <span class="required">*</span></label>
            <textarea id="principal_office_address" name="principal_office_address" rows="3" required placeholder="Enter Principal Office Address:" required></textarea>
        </div>

        <div class="form-group">
            <label for="workshop_address">Workshop of the Owner Address: <span class="required">*</span></label>
            <textarea id="workshop_address" name="workshop_address" rows="3" required placeholder="Enter Workshop of the Owner Address:" required></textarea>
        </div> 

        <div class="form-group"> 
             <label for="addr_line1">Telephone No: <span class="required">*</span></label>
             <input type="text" id="addr_line1" name="addr_line1" placeholder="Office No" required>
             <input type="text" id="addr_line2" name="addr_line2" placeholder="Residence No">
        </div>

        <div class="form-group">
            <label for="reg_no">Email Address: <span class="required">*</span></label>
            <input type="text" id="reg_no" name="reg_no" required placeholder="Enter Email Address" required>
        </div>


        

        <div class="form-group">
            <label>License Period: <span class="required">*</span></label>
            <input type="date" id="license_period_from" name="license_period_from" required> to 
            <input type="date" id="license_period_to" name="license_period_to" required>
        </div>


        <div class="form-group">
            <label for="nature_of_repairs">Nature of Repairs Proposed:</label>
            <textarea id="nature_of_repairs" name="nature_of_repairs" rows="3" required placeholder="Enter Nature of Repairs Proposed:" required></textarea>
        </div>

        <div class="form-group">
            <label>Details of Letters from Shipping Agents Authorizing Work: <span class="required">*</span></label>
            <textarea name="agent_name" placeholder="Agent Name(s)" rows ="3"required></textarea>
            <input type="text" name="line_of_vessels" placeholder="Line of Vessels" required>
            <textarea name="nature_of_work" placeholder="Nature of Work" rows="3" required></textarea>
        </div>

        <div class="form-group">
            <label>Previous License Details (if applicable):</label>
            <input type="text" name="prev_license_number" placeholder="License Number">
            <input type="date" name="prev_license_date">
            <textarea name="work_done" placeholder="Work Done for Agents During the Period" rows="3"></textarea>
        </div>

        

        <div class="form-group" style="display: flex; align-items: center; gap: 10px;">
             <label>Workshop condition same as inspection? <span class="required">*</span></label>
             <input type="radio" id="yes" name="workshop_condition" value="Yes" required> <label for="yes">Yes</label>
             <input type="radio" id="no" name="workshop_condition" value="No" required> <label for="no">No</label>
        </div>
        
        <div class="form-group">
    <label for="license_type">Select License Type: <span class="required">*</span></label>
    <select id="license_type" name="license_type" required onchange="toggleDocuments()">
        <option value="">--Select Repairs License Type--</option>
        <option value="Major">Major Repair Licence</option>
        <option value="Minor">Minor Repair Licence</option>
        <option value="Scrapping">Scrapping Chipping Cleaning</option>
        <option value="WaterRemoval">Tank/Boiler Cleaning Sludge & Garbage/Grey - Water Removal</option>
        <option value="Lashing&UnLashing">Lashing & UnLashing / Handling of Container & Cargo</option>
        <option value="UnderWaterCleaning">Diving & Underwater Cleaning </option>
    </select>
</div>

<!-- Major License Documents -->
<div id="major_docs" style="display: none;">
    <hr>
    <h2>Upload Required Documents </h2>
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
                <td><input type="file" name="BusiReg" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>A List of Workmen</td>
                <td><input type="file" name="List_Workmen" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>A List of Tool & Equipments</td>
                <td><input type="file" name="L_Tool&Equipment" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Workshop Details (Ownership)</td>
                <td><input type="file" name="Workshop_D" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Agent Letter for Respective Year</td>
                <td><input type="file" name="Agent_Letter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Request Letter to Harbour Master</td>
                <td><input type="file" name="ReqLetter" accept=".pdf" required></td>
            </tr>
            <tr>
                <th>Qualifications Certificate Photo Copy</th>
            </tr>
            <tr>
                <td>Major Repair Licence - Class 01 or Class 02 Marine Engineer, Other Technician & Mechanical Workers</td>
                <td><input type="file" name="Quli_Certificate" accept=".pdf" required></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Minor License Documents -->
<div id="minor_docs" style="display: none;">
    <hr>
    <h2>Upload Required Documents (MINOR Repairs)</h2>
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
                <td><input type="file" name="BusiReg" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>A List of Workmen</td>
                <td><input type="file" name="List_Workmen" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>A List of Tool & Equipments</td>
                <td><input type="file" name="L_Tool&Equipment" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Workshop Details (Ownership)</td>
                <td><input type="file" name="Workshop_D" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Agent Letter for Respective Year</td>
                <td><input type="file" name="Agent_Letter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Request Letter to Harbour Master</td>
                <td><input type="file" name="ReqLetter" accept=".pdf" required></td>
            </tr>
            <tr>
                <th>Qualifications Certificate Photo copy</th>
            </tr>
            <tr>
                <td>Minor Repair Licence-Marine Engineer,Technician,Mechanicals,Electrician & Other Qualifications & Safety Measures Certificate</td>
                <td><input type="file" name="Quli_Certificate" accept=".pdf" required></td>
            </tr>
        </tbody>
    </table>
</div>

<!-- Scrapping Chipping Cleaning Documents -->
<div id="scrapping_docs" style="display: none;">
    <hr>
    <h2>Upload Required Documents </h2>
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
                <td><input type="file" name="BusiReg" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>A List of Workmen</td>
                <td><input type="file" name="List_Workmen" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>A List of Tool & Equipments</td>
                <td><input type="file" name="L_Tool&Equipment" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Workshop Details (Ownership)</td>
                <td><input type="file" name="Workshop_D" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Agent Letter for Respective Year</td>
                <td><input type="file" name="Agent_Letter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Request Letter to Harbour Master</td>
                <td><input type="file" name="ReqLetter" accept=".pdf" required></td>
            </tr>
           
        </tbody>
    </table>
</div>

      <!-- Water Removal Documents -->
<div id="WaterRemoval_docs" style="display: none;">
    <hr>
    <h2>Upload Required Documents </h2>
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
                <td><input type="file" name="BusiReg" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>A List of Workmen</td>
                <td><input type="file" name="List_Workmen" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>A List of Tool & Equipments</td>
                <td><input type="file" name="L_Tool&Equipment" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Workshop Details (Ownership)</td>
                <td><input type="file" name="Workshop_D" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Agent Letter for Respective Year</td>
                <td><input type="file" name="Agent_Letter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Request Letter to Harbour Master</td>
                <td><input type="file" name="ReqLetter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>02 Years Experience For SeaMan On Boat Vessel Certificate</td>
                <td><input type="file" name="Vessel_Certificate" accept=".pdf" required></td>
            </tr>
           
        </tbody>
    </table>
</div>

       <!-- Lashing & UnLashing Documents -->
<div id="LashingUnlashing_docs" style="display: none;">
    <hr>
    <h2>Upload Required Documents </h2>
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
                <td><input type="file" name="BusiReg" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>A List of Workmen</td>
                <td><input type="file" name="List_Workmen" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Agent Letter for Respective Year</td>
                <td><input type="file" name="Agent_Letter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Request Letter to Harbour Master</td>
                <td><input type="file" name="ReqLetter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>JCT - Operation Manager Letter for Lashing Team</td>
                <td><input type="file" name="JCT_Letter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Container Lashing and Safety Measures Qualifications Certificate Photo Copy</td>
                <td><input type="file" name="Quali_Certificate" accept=".pdf" required></td>
            </tr>
        </tbody>
    </table>
</div>

        <!-- Underwater Cleaning Documents -->
<div id="UnderwaterCleaning_docs" style="display: none;">
    <hr>
    <h2>Upload Required Documents </h2>
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
                <td><input type="file" name="BusiReg" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Agent Letter for Respective Year</td>
                <td><input type="file" name="Agent_Letter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Underwater Diving Certificate (PADI-COPY-(CD-1 Supervisor / CD-2 Diver / CD-3 Diver Assistant))</td>
                <td><input type="file" name="Diving_Certi" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Divers Medical Certificate with ECG Report</td>
                <td><input type="file" name="Medicat-Certi" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Equipment List</td>
                <td><input type="file" name="Equip_list" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Divers Transport Boat Services (Rent Or Owner) Letter</td>
                <td><input type="file" name="Boat_Ser_Letter" accept=".pdf" required></td>
            </tr>
            <tr>
                <td>Request Letter to Harbour Master</td>
                <td><input type="file" name="ReqLetter" accept=".pdf" required></td>
            </tr>
            
        </tbody>
    </table>
</div>

<script>
    function toggleDocuments() {
        var licenseType = document.getElementById("license_type").value;
        document.getElementById("major_docs").style.display = (licenseType === "Major") ? "block" : "none";
        document.getElementById("minor_docs").style.display = (licenseType === "Minor") ? "block" : "none";
        document.getElementById("scrapping_docs").style.display = (licenseType === "Scrapping") ? "block" : "none";
        document.getElementById("WaterRemoval_docs").style.display = (licenseType === "WaterRemoval") ? "block" : "none";
        document.getElementById("LashingUnlashing_docs").style.display = (licenseType === "Lashing&UnLashing") ? "block" : "none";
        document.getElementById("UnderwaterCleaning_docs").style.display = (licenseType === "UnderWaterCleaning") ? "block" : "none";
    }
</script>
<button type="reset" class="btn btn-danger">Cancel</button>
<button type="submit">Submit Application and Documents</button>
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
