

<?php
/**
 * admin page template
 */

 if (getUser()) {
    //  var_dump($_SERVER);
        header('Location: /login');
        exit();
    }
$query = "SELECT * FROM info";
$result = select($query);    
 ?>
 
<?php require_once('components/html5.inc.php')?>
<?php include('components/navbarAdmin.inc.php')?>

<h1>Admin panel</h1>
<a class="btn btn-success mt-5" href="/admin/create">Create article</a>
<a class="btn btn-warning mt-5" href="/logout">LogOut</a>


<?php
 $out = '<div class="row">';

for ($i = 0; $i < count($result); $i++) {
    $out .='<div class="card m-4 d-flex" style="width: 18rem;">';
    $out .='  <img class="adminPanelImg h-25 w-50 m-auto mt-4" src="/static/images/'.$result[$i]['image'].'" class="card-img-top" alt="cardImg">';
    $out .='  <div class="card-body">';
    $out .='    <h6 class="card-title">'.$result[$i]['title'].'</h6>';
    $out .='  </div>';
    $out .='  <div class="card-body  d-flex justify-content-around align-items-end">';
    $out .='    <a class="btn btn-danger" href="/admin/delete/'.$result[$i]['id'].'" onclick="return confirm(\'Are you sure?\')">Delete</a>';
    $out .='    <a class="btn btn-danger" href="/admin/update/'.$result[$i]['id'].'" onclick="return confirm(\'Are you sure?\')">Update</a>';
    $out .='  </div>';
    $out .='</div>';
}
  echo $out;
 ?>

<?php include('components/footer.inc.php')?>
