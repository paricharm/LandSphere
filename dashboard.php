<?php
include 'include/config.php';
session_start();
if(!isset($_SESSION['role']))
{
  header("location:login.php");
}
$user = $pdo->prepare("select * from user where id='{$_SESSION['id']}'");
$user->execute();
$row_user = $user->fetch(PDO::FETCH_OBJ);
$course = $pdo->prepare("select * from course where id in($row_user->course_id)");
$course->execute();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LendSphere - "Learn, Lend, Grow"</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/dashboard.css" rel="stylesheet">
</head>

<body>

<?php include 'include/header.php' ?>

<?php include 'include/sidebar.php' ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <!-- Left side columns -->
        <div class="col-lg-8 container">
            <div class="card shadow">
              <div class="card-header">
                <h2 class="text-center">Your Details</h2>
              </div>
              <div class="card-body container col-lg-9">
                <div class="form-group py-2">
                  <div class="row">
                    <div class="col-5">
                      Name : 
                    </div>
                    <div class="col-7">
                      <?=$row_user->name?>
                    </div>
                  </div>
                </div>
                <div class="form-group py-2">
                  <div class="row">
                    <div class="col-5">
                      Email : 
                    </div>
                    <div class="col-7">
                    <?=$_SESSION['name']?>
                    </div>
                  </div>
                </div>
                <div class="form-group py-2">
                  <div class="row">
                    <div class="col-5">
                      course : 
                    </div>
                    <div class="col-7">
                      <ol>
                      <?php
                      while($course_user = $course->fetch(PDO::FETCH_OBJ))
                      {
                        echo '<li>'.$course_user->title.'</li>';
                      }
                      ?>
                      </ol>
                    </div>
                  </div>
                </div>
                <div class="form-group py-2">
                  <div class="row">
                    <div class="col-5">
                      Password : 
                    </div>
                    <div class="col-7">
                    <?=$row_user->password?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>