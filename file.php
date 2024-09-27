<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>E-complaints -> CPD</title>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.php">CPD<span>.</span></a></h1>

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
          <h2>E-complaints</h2>
          <ol>
            <li><a style="color: #ffc451;" href="index.php">Home</a></li>
            <li>E-complaints</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
      <div class="container">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
          <div class="container" data-aos="fade-up">
            <div class="section-title">
              <h2>E-Complaint</h2>
              <p>File An E-complaint</p>
            </div>
            <div class="col-lg-12 mt-5 mt-lg-0">
              <form method="post" action="./file.php" role="form">
                <div class="row">
                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="victim_id" id="victim_id" placeholder="Your CNIC" required>
                  </div>
                  <div class="col-md-3 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="tel" class="form-control" name="contact" id="contact" placeholder="Contact No (like 3211456423)" required>
                  </div>
                  <div class="col-md-3 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control" name="suspect" id="suspect" placeholder="Suspect Name(if any)">
                  </div>
                  <div class="form-control mt-3">
                    <textarea class="form-control" name="suspect_des" rows="3" placeholder="Suspect descripition (optional)"></textarea>
                  </div><br>
                  <div class="col-md-12 form-group mt-3 mt-md-0">
                    <div class="form-group">
                      <label for="dropdownMenu2">Select city:</label>
                      <select class="form-select" id="dropdownMenu2" name="dropdownMenu2" required>
                        <option value="" selected disabled>Select One...</option>
                        <option value="Lahore">Lahore</option>
                        <option value="Gujranwala">Gujranwala</option>
                        <option value="Faisalabad">Faisalabad</option>
                        <option value="Rawalpindi">Rawalpindi</option>
                        <option value="Sargodha">Sargodha</option>
                        <option value="Multan">Multan</option>
                        <option value="Bahawalpur">Bahawalpur</option>
                        <option value="Sialkot">Sialkot</option>
                        <option value="Gujrat">Gujrat</option>
                        <option value="Sahiwal">Sahiwal</option>
                        <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                        <option value="Okara">Okara</option>
                        <option value="Sheikhupura">Sheikhupura</option>
                        <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                        <option value="Jhang">Jhang</option>
                        <option value="Layyah">Layyah</option>
                        <option value="Muzaffargarh">Muzaffargarh</option>
                        <option value="Vehari">Vehari</option>
                        <option value="Khanewal">Khanewal</option>
                        <option value="Chiniot">Chiniot</option>
                      </select>
                    </div>
                  </div>
                  <br>
                  <div class="col-md-12 form-group mt-3 mt-md-0">
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
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="Description" rows="5" placeholder="Descripition" required></textarea>
                </div>
                <div class="text-center mt-3">
                  <button class="btn btn-warning" type="submit" name="submit">File Complaint</button>
                </div>
              </form>
            </div>
          </div>

        </section>
      </div>
    </section><!-- End Contact Section -->
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

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
</body>

</html>


<?php
include_once './backend/db.php'; // Include database connection file
// Check if the form is submitted
if (isset($_POST["submit"])) {
  //$id2 = filter_input(INPUT_POST, "victim_id", FILTER_VALIDATE_INT); //victim id
  $id = filter_input(INPUT_POST, "victim_id", FILTER_SANITIZE_SPECIAL_CHARS); //victim id
  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS); //victim name
  $contact = filter_input(INPUT_POST, "contact", FILTER_VALIDATE_INT); //victim contact
  $suspect = filter_input(INPUT_POST, "suspect", FILTER_SANITIZE_SPECIAL_CHARS); //suspect name
  $suspect_des = filter_input(INPUT_POST, "suspect_des", FILTER_SANITIZE_SPECIAL_CHARS); //suspect description
  $des = filter_input(INPUT_POST, "Description", FILTER_SANITIZE_SPECIAL_CHARS); //case description
  // echo var_dump($_POST["name"]);
  if (isset($_POST['dropdownMenu2'])) {
    $districtOption = $_POST['dropdownMenu2']; // Get the selected option value

    // Initialize the district variable
    $district = "";

    // Switch case to determine the district based on the selected option
    switch ($districtOption) {
      case "Lahore":
        $district = "Lahore";
        break;
      case "Gujranwala":
        $district = "Gujranwala";
        break;
      case "Faisalabad":
        $district = "Faisalabad";
        break;
      case "Rawalpindi":
        $district = "Rawalpindi";
        break;
      case "Sargodha":
        $district = "Sargodha";
        break;
      case "Multan":
        $district = "Multan";
        break;
      case "Bahawalpur":
        $district = "Bahawalpur";
        break;
      case "Sialkot":
        $district = "Sialkot";
        break;
      case "Gujrat":
        $district = "Gujrat";
        break;
      case "Sahiwal":
        $district = "Sahiwal";
        break;
      case "Rahim Yar Khan":
        $district = "Rahim Yar Khan";
        break;
      case "Okara":
        $district = "Okara";
        break;
      case "Sheikhupura":
        $district = "Sheikhupura";
        break;
      case "Dera Ghazi Khan":
        $district = "Dera Ghazi Khan";
        break;
      case "Jhang":
        $district = "Jhang";
        break;
      case "Layyah":
        $district = "Layyah";
        break;
      case "Muzaffargarh":
        $district = "Muzaffargarh";
        break;
      case "Vehari":
        $district = "Vehari";
        break;
      case "Khanewal":
        $district = "Khanewal";
        break;
      case "Chiniot":
        $district = "Chiniot";
        break;
    }
    // Output the selected district
   // echo "Selected District: " . $district . "<br>";
  } else {
    // Handle if dropdown menu value is not set
    echo "Error: Dropdown menu value is not set";
  }

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
  if ($id !== false && $contact !== false && (strlen($id) == 13)) {
    $sql = "INSERT INTO victim (victimid,name, contactno) VALUES ('$id','$name', LPAD('$contact',11,'0'))";
    // Execute SQL query
    if ($conn->query($sql) === FALSE) {
      echo "Error: " . $sql . "<br> {$conn->error}";
    }
    $sql = null;
    if (strlen($suspect) == 0 && strlen($suspect_des) > 0) {
      $sql = "INSERT INTO suspect (suspect_id, name, lastknownlocation, suspect_description)
      VALUES (LPAD(FLOOR(RAND() * 999999999999), 13, '3'), 'John Doe', 'unknown', '$suspect_des');";
    } elseif (strlen($suspect) > 0 && strlen($suspect_des) == 0) {
      $sql = "INSERT INTO suspect (suspect_id, name, lastknownlocation, suspect_description)
      VALUES (LPAD(FLOOR(RAND() * 999999999999), 13, '3'), '$suspect', 'unknown', 'unkown');";
    } else if (strlen($suspect > 2) && strlen($suspect_des) > 0) {
      $sql = "INSERT INTO suspect (suspect_id, name, lastknownlocation, suspect_description)
      VALUES (LPAD(FLOOR(RAND() * 999999999999), 13, '3'), '$suspect', 'unknown', '$suspect_des');";
    }
    


    if ($conn->query($sql) === TRUE) {
      // Get the last inserted suspect_id
    $lastSuspectId = $conn->insert_id;}else{
      echo "Error: " . $sql . "<br> {$conn->error}";
    }
    $currentDate = date("Y-m-d");
    $sql = "INSERT INTO `casee` (`victimid`, `suspect_id`, `dateofReport`, `desciption`, `section`, `case_category`, `station_id`)
        VALUES (
            '$id',
            (SELECT `suspect_id` FROM `suspect` WHERE `uid` = '$lastSuspectId' ),
            '$currentDate',
            '$des',
            '$section',
            '$category',
            (SELECT `station_id` FROM `station` WHERE `district` = '$district' ORDER BY RAND() LIMIT 1)
        )";

    // Execute SQL query
    if ($conn->query($sql) === FALSE)
      echo "Error: " . $sql . "<br> {$conn->error}";
     //for court
     $sql = "INSERT INTO `court` (`judgementoutcome`, `judgementDate`, `judge_id`, `casee_id`) 
     VALUES (
         'In Trial',
         (SELECT DATE_ADD('$currentDate', INTERVAL FLOOR(RAND() * 100) DAY)),
         (SELECT `judge_id` FROM `judge` ORDER BY RAND() LIMIT 1),
         (SELECT MAX(`casee_id`) FROM `casee`)
     )";
    // Execute SQL query
    if ($conn->query($sql) === FALSE)
      echo "Error: " . $sql . "<br> {$conn->error}";
     // Execute SQL query and retrieve case id of filed complaint
    $sqlres = "SELECT MAX(casee_id) AS casee_id from casee";
    $result = $conn->query($sqlres);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {
        echo "<script>alert('Complaint filed successfully! Your case ID is: {$row['casee_id']}');</script>";
      }
    } else
      echo "<script>alert('Sorry, there was an error! Please try again. Sorry for the inconvenience')</script>";
  } else {
    echo "<script>alert('Kindly Enter valid input!');</script>";
  }
}

?>