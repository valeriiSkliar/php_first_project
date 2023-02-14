<?php 

if(checkUser()) {
    $query = "DELETE FROM info WHERE id=".$id;
    execQuery($query);
    header('Location: /admin');
    exit();
} else {
    header('Location: /admin');
}
// header('Location: /');
?>
