<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Criminal Record -> CPD</title>
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
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">CPD<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="/index.php#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="/index.php#about">About</a></li>
          <li><a class="nav-link scrollto" href="/index.php#services">Services</a></li>
          <li><a class="nav-link scrollto " href="/index.php#Breakthroughs">Breakthroughs</a></li>
          <li><a class="nav-link scrollto" href="/index.php#team">Officers</a></li>
          <li><a class="nav-link scrollto" href="/index.php#cta">Contact</a></li>
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
          <h2>Check Criminal Record</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Check Criminal Record</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
        <!-- ======= Check Criminal Record Section ======= -->
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">

            <div class="section-title">
              <h2>Criminal Records</h2>
              <p>Check Criminal Record</p>
            </div>

            <div class="col-lg-12 mt-5 mt-lg-0">
              <form action="/inner-page.php" method="post" role="form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="tel" name="person_id" class="form-control" id="person_id" placeholder="Enter Person's CNIC" required>
                  </div>
                  <div class="col-md-2 form-group "><button class="btn btn-warning" name="check" type="submit">Check</button></div>
              </form>
            </div>
          </div>

          <?php
          include_once './backend/db.php'; // Include database connection file

          // Check if the form is submitted
          if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["check"])) {
            $id = filter_input(INPUT_POST, "person_id", FILTER_SANITIZE_NUMBER_INT);
            if ($id !== false && strlen($id) == 13) {
              $sql = "SELECT s.suspect_id AS sus, c.desciption AS complaint_description,c.case_category AS crime, cr.judgementDate AS date_,  s.name AS suspect_name, cr.judgementoutcome AS complaint_status, c.section AS section FROM court cr LEFT JOIN casee c ON c.casee_id = cr.casee_id LEFT JOIN suspect s ON c.suspect_id = s.suspect_id WHERE s.suspect_id = ? AND (cr.judgementoutcome = 'Guilty' OR cr.judgementoutcome = 'In Trial');";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param("i", $id);
              $stmt->execute();
              $result = $stmt->get_result();
            }
            else
            {
              echo "<script>alert('Kindly Enter valid input!');</script>";
            }
          }

            // Check if data has been retrieved and display it
            if (isset($result)) {
              
              if ($result->num_rows > 0) {
                echo "<section><div class='container' data-aos='fade-up'><h3 class='fw-bold'>Criminal Record has been found</h3>";
                echo "<table class='table table-striped table-responsive'>";
                echo "<thead><tr><th>Suspect ID</th><th>Suspect Name</th><th>Crime</th><th>Section</th><th>Case Description</th><th>Trial Status</th><th>Trial Date</th></tr></thead><tbody>";

                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td>{$row["sus"]}</td>";
                  echo "<td>{$row["suspect_name"]}</td>";
                  echo "<td>{$row["crime"]}</td>";
                  echo "<td>{$row["section"]}</td>";
                  echo "<td>{$row["complaint_description"]}</td>";
                  echo "<td>{$row["complaint_status"]}</td>";
                  echo "<td>{$row["date_"]}</td>";
                  echo "</tr>";
                }

                echo "</tbody></table>";
                echo "</div></section>";
              } else {
                echo "<section><div class='container'><h3 class='fw-bold'>No Criminal Record was found for this Person.</h3></div></section>";
              }
            }
          
          ?>
        </section>
      </div>
    </section><!-- End Check Criminal Record Section -->
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
              <li><i class="bx bx-chevron-right"></i> <a href="/index.php#hero">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/index.php#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/index.php#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/index.php#Breakthroughs">Breakthroughs</a></li>
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
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/gp-free-multipurpose-html-bootstrap-template/ -->
          <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
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