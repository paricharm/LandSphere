<?php
include 'include/config.php';
if(isset($_POST['submit']))
{
  $user = $_POST['name'];
  $pass = md5($_POST['password']);
  $email = $_POST['email'];
  if(!empty($user) || !empty($pass) || !empty($email))
  {
    $sql = $pdo->prepare("insert into user(name,email,password)values('{$user}','{$email}','{$pass}')");
    if($sql->execute())
    {
      echo "<div class='alert alert-success'>User Created</div>";
      header("location:login.php");
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="admin/assets/img/favicon.png" rel="icon">
  <link href="admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="admin/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="admin/assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">LendSphere</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body container col-md-10 col-lg-10 py-3">

                  <form class="row g-3 needs-validation" novalidate method="post" action="">
                    <div class="col-12 py-2">
                        <div class="row">
                            <div class="col-4">Name </div>
                            <div class="col-8"><input type="text" name="name" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-12 py-2">
                        <div class="row">
                            <div class="col-4">Email </div>
                            <div class="col-8"><input type="text" name="email" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-12 py-2">
                        <div class="row">
                            <div class="col-4">Password </div>
                            <div class="col-8"><input type="text" name="password" class="form-control"></div>
                        </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="submit">Register</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Already Account ? <a href="login.php">login</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="admin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="admin/assets/vendor/quill/quill.min.js"></script>
  <script src="admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="admin/assets/js/main.js"></script>

</body>

</html>
<?php
 
  // print_r($_SESSION);
?>