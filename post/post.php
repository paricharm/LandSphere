<div class="container col-lg-10 col-md-10">
  <div class="row">
    <?php
    $course_user = $pdo->prepare("select * from course where id in ($row_user->course_id)");
    $course_user->execute();
    while($row = $course_user->fetch(PDO::FETCH_OBJ))
    {
      // print_r($row);
      ?>
          <div class="col-lg-4 col-md-4 col-12 p-2">
            <div class="card">
              <div class="img-top">
                <img src="admin/<?= $row->img ?>" alt="" class="img-fluid">
              </div>
              <div class="px-2 py-3">
                <h2 class="title">
                  <a href="blog-details.html"><?= $row->title ?></a>
                </h2>
                <p>"<?=$row->description?>"</p>
                <p class="post-category"><?= $row->time ?> | <?= $row->level ?></p>
                
                <a href="" class="btn btn-success col-12 disabled" style="">Enrolled</a>
              </div>
            </div>
          </div>
      <?php
    }  
    ?>
  </div>
</div>