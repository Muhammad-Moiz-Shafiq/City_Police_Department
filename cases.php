<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Case Study -> CPD</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/shield.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <style>
    /* CSS to make a specific column wrap its content */
    .word-wrap-column {
      white-space: normal !important;
      word-wrap: break-word !important;
    }
  </style>
  <!-- =======================================================
  * Template Name: Gp
  * Template URL: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">CPD<span>.</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.php" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="/boot/index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/boot/index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="/boot/index.php#services">Services</a></li>
          <li><a class="nav-link scrollto " href="/boot/index.php#Breakthroughs">Breakthroughs</a></li>
          <li><a class="nav-link scrollto" href="/boot/index.php#team">Officers</a></li>
          <li><a class="nav-link scrollto" href="/boot/index.php#cta">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="https://www.punjabpolice.gov.pk/recruitment2011" target="_blank" class="get-started-btn">Join Police</a>
    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Case Study</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Case Study</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <div class="col-lg-12 col-md-12 form-group mt-3 mt-md-0">

          <form action="/boot/cases.php" method="post" role="form">
            <div class="row">
              <div class="form-group">
                <label for="dropdownMenu">Select category:</label>
                <select class="form-select" id="dropdownMenu" name="dropdownMenu" required>
                  <option value="" selected disabled>Select One...</option>
                  <option value="1">Theft - Section 380</option>
                  <option value="2">Dacoity - Section 395</option>
                  <option value="3">Fraud - Section 420</option>
                  <option value="4">Harrasement - Section 509</option>
                  <option value="5">Domestic Violence - Section 498</option>
                  <option value="6">Hit & Run - Section 320</option>
                  <option value="7">Drug Abuse - Section 9</option>
                  <option value="8">Murder - Section 302</option>
                  <option value="9">Assault - Section 355</option>
                  <option value="10">Molestation - Section 375</option>
                  <option value="11">Cybercrime - Section 29</option>
                  <option value="12">Arson - Section 440</option>
                </select>
              </div>
            </div>
            <div class="text-center mt-5 mt-lg-0 ">
              <button class="btn btn-warning mt-3" type="submit" name="submit">Find Cases</button>
            </div>
          </form>
        </div>
        <?php
          include_once './backend/db.php'; // Include database connection file
          
          // Check if the form is submitted
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
            if (isset($_POST['dropdownMenu'])) {
              $crimeOption = $_POST['dropdownMenu']; // Get the selected option value
          
              $category = ""; // Initialize the category variable
              $section = ""; // Initialize the section variable
          
              // Switch case to determine the category and section based on the selected option
              switch ($crimeOption) {
                case "1":
                  $category = "Theft";
                  $section = "Section 380";
                  break;
                case "2":
                  $category = "Dacoity";
                  $section = "Section 395";
                  break;
                case "3":
                  $category = "Fraud";
                  $section = "Section 420";
                  break;
                case "4":
                  $category = "Harassment";
                  $section = "Section 509";
                  break;
                case "5":
                  $category = "Domestic Violence";
                  $section = "Section 498";
                  break;
                case "6":
                  $category = "Hit & Run";
                  $section = "Section 320";
                  break;
                case "7":
                  $category = "Drug Abuse";
                  $section = "Section 9";
                  break;
                case "8":
                  $category = "Murder";
                  $section = "Section 302";
                  break;
                case "9":
                  $category = "Assault";
                  $section = "Section 355";
                  break;
                case "10":
                  $category = "Molestation";
                  $section = "Section 375";
                  break;
                case "11":
                  $category = "Cybercrime";
                  $section = "Section 29";
                  break;
                case "12":
                  $category = "Arson";
                  $section = "Section 440";
                  break;
                default:
                  $category = "Unknown";
                  $section = "Unknown";
                  break;
              }
              // Output the selected category and section
              // echo "Selected Category: " . $category . "<br>";
              // echo "Selected Section: " . $section;
            } else {
              // Handle if dropdown menu value is not set
              echo "Error: Dropdown menu value is not set";
            }
            $sql = "SELECT 
            c.casee_id, 
            c.case_category,
            c.section,
            c.desciption,
            c.dateofReport,
            (
                SELECT co.name 
                FROM commisionedofficer co 
                WHERE co.posting = s.district 
                ORDER BY RAND() 
                LIMIT 1
            ) AS offname,
            s.district AS loc
        FROM 
            casee c 
            JOIN station s USING (station_id) 
        WHERE 
            c.case_category = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $category);
            $stmt->execute();
            $result = $stmt->get_result();

            // // Redirect to prevent form resubmission
            // header("Location: " . $_SERVER['PHP_SELF']);
            // exit;
          }
          // Check if data has been retrieved and display it
          if (isset($result)) {
            if ($result->num_rows > 0) {
              echo "<section><div class='container' data-aos='fade-up'>";
              echo "<table class='table table-striped table-responsive'>";
              echo "<thead><tr><th>Case ID</th><th>Crime</th><th>Section</th><th>Case Description</th><th>Investigation Officer</th><th>District</th><th>Date of Report</th></tr></thead><tbody>";

              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row["casee_id"]}</td>";
                echo "<td>{$row["case_category"]}</td>";
                echo "<td>{$row["section"]}</td>";
                echo "<td class='word-wrap-column'>{$row["desciption"]}</td>";
                echo "<td>{$row["offname"]}</td>";
                echo "<td>{$row["loc"]}</td>";
                echo "<td>{$row["dateofReport"]}</td>";
                echo "</tr>";
              }
              echo "</tbody></table>";
              echo "</div></section>";
            } else {
              echo "<section><div class='container'>No case record was found for this case category.</div></section>";
            }
          }
          ?>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-8 col-sm-8" id="footer-mid-c1">
            <div class="row" id="footer-help-wrap">
              <div class="col-12" id="footer-help">
                <div class="row" id="foot-help-title-wrap">
                  <div class="col-12 fm-title" id="foot-help-title">
                    <h3>Helplines</h3>
                    <hr>
                  </div>
                </div>
                <div class="row" id="foot-help-list-wrap">
                  <div class="col-lg-6 col-md-3 col-sm-6 col-12" id="foot-help-c1">
                    <!-- Add helplines content here -->
                    <div class="foot-help-txt" id="foot-igpcc-txt">
                      <div class="foot-help-text-1" id="foot-igpcc-txt-1">IGP Complaint Center</div>
                      <div class="foot-help-text-2" id="foot-igpcc-txt-2">1787</div>
                      <hr>
                      <div class="foot-help-text-1" id="foot-igpcc-txt-1">Police Emergency</div>
                      <div class="foot-help-text-2" id="foot-igpcc-txt-2">15</div>
                      <hr>
                      <div class="foot-help-text-1" id="foot-igpcc-txt-1">Fire Brigade</div>
                      <div class="foot-help-text-2" id="foot-igpcc-txt-2">15</div>
                      <hr>
                      <div class="foot-help-text-1" id="foot-igpcc-txt-1">Services Hospital</div>
                      <div class="foot-help-text-2" id="foot-igpcc-txt-2">(042) 99203402-25</div>
                      <hr>
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-3 col-sm-6" id="foot-help-c2">
                    <!-- Add more helplines content here -->
                    <div class="foot-help-txt" id="foot-igpcc-txt">
                      <div class="foot-help-text-1" id="foot-igpcc-txt-1">Counter Terrorism Dept.</div>
                      <div class="foot-help-text-2" id="foot-igpcc-txt-2">0800-111-11</div>
                      <hr>
                      <div class="foot-help-text-1" id="foot-igpcc-txt-1">Rescue Service</div>
                      <div class="foot-help-text-2" id="foot-igpcc-txt-2">1122</div>
                      <hr>
                      <div class="foot-help-text-1" id="foot-igpcc-txt-1">Railway Inquiry</div>
                      <div class="foot-help-text-2" id="foot-igpcc-txt-2">117</div>
                      <hr>
                      <div class="foot-help-text-1" id="foot-igpcc-txt-1">General Hospital</div>
                      <div class="foot-help-text-2" id="foot-igpcc-txt-2">(042) 99264091-8</div>
                      <hr>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-4  footer-links fs-6">
            <h4 class="fs-5">Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/boot/index.php#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/boot/index.php#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/boot/index.php#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/boot/index.php#Breakthroughs">Breakthroughs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://www.punjabpolice.gov.pk/recruitment2011" target="_blank">Join Police Now</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright <strong><span>CPD</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->


  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/main.js"></script>

</body>

</html>