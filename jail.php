<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Jails -> CPD</title>
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
          <h2>Jails</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Jails</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">
      <?php
          include_once './backend/db.php'; // Include database connection file

            $sql = "SELECT jail_id,j.name as jname,j.location,capacity,c.name FROM jail j join commisionedofficer c on j.jailer_id = c.commofficerid;";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->get_result();
          
          // Check if data has been retrieved and display it
          if (isset($result)) {
            if ($result->num_rows > 0) {
              echo "<section><div class='container' data-aos='fade-up'><h3 class='fw-bold'>Jails details are as follows:</h3>";
              echo "<table class='table table-striped'>";
              echo "<thead><tr><th>Jail ID</th><th>Name</th><th>Location</th><th>Capacity</th><th>Jailer Name</th></tr></thead><tbody>";
              while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row["jail_id"]}</td>";
                echo "<td>{$row["jname"]}</td>";
                echo "<td>{$row["location"]}</td>";
                echo "<td>{$row["capacity"]}</td>";
                echo "<td>{$row["name"]}</td>";
                echo "</tr>";
              }
              echo "</tbody></table>";
              echo "</div></section>";
            } else {
              echo "<section><div class='container'>No Record was found.</div></section>";
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