<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Careers </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/title.jpeg" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">
  
  <!-- =======================================================
  * Template Name: Append
  * Updated: Feb 01 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/append-bootstrap-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="apply_online" data-bs-spy="scroll" data-bs-target="#navmenu">

  <!-- ======= Header ======= -->
  <?php include 'header.php'; ?>
  <!-- End Header -->

  <main id="main">

    <!-- Page Title -->
    <div data-aos="fade" class="page-title">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Application Form</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <section class="application" >

    <div class="testbox">
      <form action="#">
              
        
        <div class="name-item">
          <div class="item">
            <p>First Name<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
          <div class="item">
            <p>Last Name<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
        </div>
        
        <div class="contact-item">
          <div class="item">
            <p>Email<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
          <div class="item">
            <p>Phone<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
        </div>

        <div class="education-item">
          <div class="item">
          <p>Qualification<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
          <div class="item">
            <p>Specification<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
          </div>

          <div class="experience-item">
          <div class="item">
          <p>Designation<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
          <div class="item">
            <p>Year Of Experience<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
          <div class="item">
            <p>Last Employer<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>


          </div>

          
        <div class="contact-item">
          <div class="item">
            <p>Skills<span class="required">*</span></p>
            <input type="text" name="name" required/>
          </div>
        </div>



        <div class="position-item">
          <div class="item">
            <p>Joining Period<span class="required">*</span></p>
            <select required>
              <option value="1">Immediate Joining</option>
              <option value="2">7 days</option>
              <option value="3">10 days</option>
              <option value="4">15 days</option>
              <option value="5">30 days</option>
              <option value="5">more than 30 days</option>
            </select>
          </div>
        </div>

        
        <div class="item">
          <p>Submit your resume by providing your resume URL or attach file:</p>
          <input type="text" name="providing"/>
            <input type="file" name="file" accept="file/*">
        </div>
       
        <div class="btn-block">
          <button type="submit" href="/">Apply For The Job</button>
        </div>
      </form>
    </div>
        </div>
     
       
     

    </section>
    

  </main>

  <!-- ======= Footer ======= -->
  <?php include 'footer.php'; ?>
</body>

</html>