<?php


if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = trim($_POST['title']);
    $url = trim($_POST['url']);
    $descr_min = trim($_POST['descr_min']);
    $description = trim($_POST['description']);
    $cid = $_POST['cid'];
    if (isset($_FILES['image']['tmp_name']) AND $_FILES['image']['tmp_name']!='') {
        move_uploaded_file($_FILES['image']['tmp_name'], 'static/images/' . $_FILES['image']['name']);
        $image = $_FILES['image']['name'];
    }
    else {
        $image = $_POST['imageName'];
    }

    // $id = $route[2];

    $update = updateArticle($id, $title, $url, $descr_min, $description, $cid, $image);

    if ($update) {
        setcookie("alert", "update ok", time() + 60 * 10);
        header('Location: /admin/update/'.$_POST['id']);
        // setcookie("alert", "", time() - 60 * 10);
    } else {
        setcookie("alert", "update error", time() + 60 * 10);
        header('Location: /admin/update/'.$_POST['id']);
        // setcookie("alert", "", time() - 60 * 10);
    }
}


?>