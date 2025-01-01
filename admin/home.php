<?php
include '../include/config.php';
session_start();
if(!isset($_SESSION['role']))
{
  header("location:login.php");
}
$all_cat = $pdo->prepare("select * from category order by date_created asc");
$all_cat->execute();
$all_course = $pdo->prepare("select * from course order by date_created asc");
$all_course->execute();
$all_user = $pdo->prepare("select * from user inner join course on course.id=user.course_id order by user.date_created asc");
$all_user->execute();
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
  <link href="../assets/img/favicon.png" rel="icon">
  <link href="../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>

<body>



<?php include 'include/header.php'; ?>
<?php include 'include/sidebar.php'; ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Category</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
        <?php
        if(isset($_GET['New_Category']))
        {
            include 'category/category.php';
        }
        if(isset($_GET['All_Category']))
        {
            include 'category/index.php';
        }
        if(isset($_GET['Update_Category']))
        {
            include 'category/manage.php';
        }
        if(isset($_GET['All_Course']))
        {
            include 'course/index.php';
        }
        if(isset($_GET['New_Course']))
        {
          include 'course/course.php';
        }
        if(isset($_GET['Update_Course']))
        {
          include 'course/manage.php';
        }
        if(isset($_GET['All_User']))
        {
          include 'user/index.php';
        }
        if(isset($_GET['Update_User']))
        {
          include 'user/manage.php';
        }
        ?>
      </div>
    </section>

  </main><!-- End #main -->

 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/chart.js/chart.umd.js"></script>
  <script src="../assets/vendor/echarts/echarts.min.js"></script>
  <script src="../assets/vendor/quill/quill.js"></script>
  <script src="../assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>