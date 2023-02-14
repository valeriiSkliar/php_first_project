<?php

// if(isset($_POST['submit'])) {
    $errors = [];
    if(strlen($_POST['login']) < 4 OR strlen($_POST['login']) > 30) {
        $errors[] =  'login longer more then 30 characters or less then 4 characters<br>';
    }
    if(isLoginExist($_POST['login'])) {
        $errors[] = 'this login exist`s';
    }
    if(count($errors) === 0) {
        createUser($_POST['login'], $_POST['password']);
        header('Location: /login');
        exit();
    } else {
        // header('Location: /registr');
        // exit();
        echo "<h4>Registrtion error</h4>";
        foreach ($errors as $value) {
            echo $value;
        }
    }

// }

?>