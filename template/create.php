<?php include('components/html5.inc.php')?>
<?php include('components/navbarAdmin.inc.php')?>

<h1 class="px-5 py-2">Create</h1>
<?php
/**
 * create page template
 */

$action = "Create";
$query ="SELECt id, title FROM category";
$category = select($query);
$result = array(
    "title" => "",
    "url" => "",
    "descr_min" => "",
    "description" => "",
    "cid" => "",
    "image" => ""
);

include 'CRUD/_form.php';
?>


<?php

?>
