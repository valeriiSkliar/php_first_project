<?php

    $loginErrors = [];
    $user = login($_POST['login'], $_POST['password']);
    if($user) {
        $user = $user[0];
        $hash = md5(generateCode(10));
        $ip = null;
        if(!empty($_POST['ip'])) {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        setcookie('id',$user['id'],time()+60*60*24*30,'/','phpprojectstage2.000webhostapp.com', false, false);
        setcookie('hash',$hash,time()+60*60*24*30,'/','phpprojectstage2.000webhostapp.com', false, false);
        updateUser ($user['id'], $hash, $ip);
        header("Location: /admin");
        exit();
    } else {
        array_push($loginErrors, 'there is misteke in pass or login');
        header("Location: /login");
        exit();
    }
// }

?>