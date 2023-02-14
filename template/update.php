

<?php
/**
 * update page template
 */


$query ="SELECt id, title FROM category";
$category = select($query);
$query ="SELECt * FROM info WHERE id=".$id;
$result = select($query)[0];

$action = 'Update';


if (isset($_COOKIE['alert'])) {
    $alert = $_COOKIE['alert'];
    setcookie("alert", "", time() - 60 * 10);
    unset($_COOKIE['alert']);
    echo $alert;
}
?>
<?php include('components/html5.inc.php')?>
<?php include('components/navbarAdmin.inc.php')?>
<h1 class="px-5 py-2">Update article</h1>
<?php
require_once 'CRUD/_form.php';
?>
