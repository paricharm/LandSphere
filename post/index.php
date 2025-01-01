<div class="container col-lg-12 col-12 col-md-12">
<div class="row">
<?php
$al_post = $pdo->prepare("select * from post where user_id={$_SESSION['id']} ORDER BY date_created ASC");
$al_post->execute();
while($row = $al_post->fetch(PDO::FETCH_OBJ))
{
?>
<div class="col-lg-3 col-md-6 col-12 container">
  <div class="card shadow" style="height: 350px;">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <h5 class="text-center text-primary"><?=$row->title ?></h2>
            <a href="delete.php?type=delete_post&postId=<?=$row->post_id?>" class="btn btn-danger text-light btn-sm pt-2">X</a>
        </div>
    </div>
    <div class="card-body">
      <div class="img-top text-center">
        <img src="<?=$row->image?>"  height="200" width="220" alt="">
      </div>
      <div class="p-3 pb-0">
        <p><?=$row->description?></p>
      </div>
    </div>
  </div>
</div>
<?php
}
?>
</div>
</div>
<div class="container col-lg-4 col-md-4 my-5">
    <div class="pagination ">
      <a href="#">&laquo;</a>
      <a class="active" href="#">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">&raquo;</a>
    </div>
</div>
<?php
if(isset($_POST['register']))
{
  // print_r($_POST);
  // $name = $_POST['name'];
  $title = $_POST['title'];
  $desc = $_POST['desc'];
  $category = $_POST['category'];
  $image = $_FILES['image']['name'];
  $user= $_SESSION['id'];
  $dir = 'uploads/';

  $file_name = $dir.date('d-m-y-h-i-s').'.png';
  $tmp_name = $_FILES['image']['tmp_name'];
  if(!empty($title) || !empty($desc) || !empty($category) || !empty($image))
  {
    if(!file_exists($dir))
    {
        mkdir($dir);
    }else{
      if(move_uploaded_file($tmp_name,$file_name))
      {
          $insert = $pdo->prepare("insert into post(title,description,image,cat_id,user_id)values('{$title}','{$desc}','{$file_name}','{$category}','{$user}')");
          if($insert->execute())
          {
            echo "<div class='alert alert-success'>New Post Added!</div>";
          }else{
            exit;
          }
      }
    }
  }
}
?>
<div class="col-lg-10 col-md-10 col-12 container">
  <div class="card shadow">
    <div class="card-header">
      <h2 class="text-center text-primary">Make Post</h2>
    </div>
    <div class="card-body container col-md-8 col-lg-8 col-10">
      <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group py-2">
          <div class="row">
            <div class="col-4">Title : </div>
            <div class="col-8"><input type="text" name="title" class="form-control"></div>
          </div>
        </div>
        <div class="form-group py-2">
          <div class="row">
            <div class="col-4">Descrption : </div>
            <div class="col-8"><input type="text" name="desc" class="form-control"></div>
          </div>
        </div>
        <div class="form-group py-2">
          <div class="row">
            <div class="col-4">Category : </div>
            <div class="col-8">
              <select name="category" class="form-control" id="">
                <?php
                $al_cat = $pdo->prepare("select * from category");
                $al_cat->execute();
                while($row = $al_cat->fetch(PDO::FETCH_OBJ))
                {
                    echo '<option value="'.$row->cat_id.'">'.$row->name.'</option>';
                }
                ?>
              </select>
            </div>
          </div>
        </div>
        <div class="form-group py-2">
          <div class="row">
            <div class="col-4">Image : </div>
            <div class="col-8"><input type="file" name="image" class="form-control"></div>
          </div>
        </div>
        <div class="form-group py-2">
          <div class="row">
            <div class="col-4"></div>
            <div class="col-8"><input type="submit" name="register" class="btn btn-default btn-outline-success col-12"></div>
          </div>
        </div>

      </form>
    </div>
  </div>
</div>
