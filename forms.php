<?php include 'include/config.php'; 
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $course = implode(',',$_POST['course']);
    $find = $pdo->prepare("select * from user where email='{$email}'");
    $find->execute();
    if($find->rowCount()>0)
    {
      $update = $pdo->prepare("update user set course_id='{$course}' where email='{$email}'");
      if($update->execute())
      {
        header("location:login.php");
      }
    }else{
      header("location:register.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forms / Elements - NiceAdmin Bootstrap Template</title>
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
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body style="height: 100vh;width:100%;display:flex;align-items:center;">
  <div class="container">
      <div class="container col-lg-6 col-12 col-md-6">
      <div class="card shadow">
            <div class="card-header">
                <h2 class="text-center">Course Enroll</h2>
            </div>
            <div class="card-body container col-lg-8 col-md-8">
              <form action="" method="post">
                <div class="form-group py-2">
                  <div class="row">
                      <div class="col-4">Name :</div>
                      <div class="col-8"><input type="text" name="name" class="form-control"></div>
                  </div>
                </div>
                <div class="form-group py-2">
                  <div class="row">
                      <div class="col-4">Email :</div>
                      <div class="col-8"><input type="text" name="email" class="form-control"></div>
                  </div>
                </div>
                <div class="form-group py-2">
                  <div class="row">
                      <div class="col-4">Course :</div>
                      <div class="col-8">
                        <select name="course[]" class="form-control select2" multiple="multiple" id="">
                          <?php
                          $cr = $pdo->prepare("select * from course");
                          $cr->execute();
                          while($row = $cr->fetch(PDO::FETCH_OBJ))
                          {
                            echo '<option value="'.$row->id.'">'.$row->title.'</option>';
                          }
                          ?>
                        </select>
                      </div>
                  </div>
                </div>
                <div class="form-group py-2">
                  <div class="row">
                      <div class="col-4"></div>
                      <div class="col-8">
                        <input type="submit" class="btn btn-default btn-outline-info col-12" name="submit" value="ENROLL">
                      </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
      </div>
  </div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>
$(document).ready(function() {
    $('.select2').select2();
});
</script>
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