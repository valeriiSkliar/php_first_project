<?php

function explodeURL ($url){
    return explode('/', $url);
}
function getArticle ($url){
    $query = "SELECT * FROM info WHERE url='".$url."'";
    return select($query);
}
function getCategory($url){
    $query = "SELECT * FROM category WHERE url='".$url."'";
    return select($query);
}
function getCategoryArticles($cid){
    $query = "SELECT * FROM info WHERE cid='".$cid."'";
    return select($query);
}

function isLoginExist($login){
    $query = "SELECT id FROM users WHERE login='".$login."'";
    $result = select($query);
    if(count($result) === 0){ return false; }
        return true;

}

function createUser($login, $password){
    $password = md5(md5(trim($password)));
    $login = trim($login);
    $query = "INSERT INTO users SET login='".$login."',password='".$password."'";
    return execQuery($query);
}
function login($login, $password) {
    $password = md5(md5(trim($password)));
    $login = trim($login);
    $query = "SELECT * FROM users  WHERE login='".$login."' AND password='".$password."'";
    $result = select($query);

    if(count($result) === 0) {
        return false;
    }
    return $result;
}

function generateCode($lenght =7) {
    $chars = 'ofodsfodksfk[ssdASDFGHJKL:{PIOIUYTTRREWWpfkpkspdkfpsfspdfpoos,cvpsvp123456789svpsdksrf[blohnmnp[flw]a-eagdbp';
    $code = '';
    $clen = strlen($chars) - 1;
    while(strlen($code) < $lenght) {
        $code.= $chars[mt_rand(0, $clen)];
    }

    return $code;
}

function updateUser($id, $hash, $ip) {
    if (is_null($ip)) {
        $query = "UPDATE users SET hash='".$hash."' WHERE id=".$id;
    }
    else {
        $query = "UPDATE users SET hash='".$hash."', ip=INET_ATON('".$ip."') WHERE id=".$id;
    }
    return execQuery($query);
}

function getUser() {
    if(isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
        $query = "SELECT id, login, hash, INET_NTOA(ip) as ip FROM users WHERE id = ".intval($_COOKIE['id'])." LIMIT 1 ";
        $user = select($query);
        if(count($user) === 0) {
            return false;
        } else {
            if($user['hash'] !== $_COOKIE['hash']) {
                clearcoolies();
                return false;
            }
            if(!is_null($user['ip'])){
                if($user['ip'] !== $_SERVER['REMOTE_ADDR']) {
                    clearcoolies();
                    return false;
                }
            }
            $_GET['login'] = $user['login'];
            return true;
        }

    } else {
        clearcoolies();
        return true;
    }
}

function clearcoolies(){
    setcookie('id', '', time()-60*60*24*30, "/", 'phpprojectstage2.000webhostapp.com', false, false);
    setcookie('hash', '', time()-60*60*24*30, "/", 'phpprojectstage2.000webhostapp.com', false, false);
    unset($_GET['login']);
}

function createArticle($title,$url,$descr_min,$description, $cid,$image){
    $query = "INSERT INTO info (title, url, descr_min, description, cid, image) VALUES ('".$title."', '".$url."','".$descr_min."','".$description."',".$cid.",'".$image."')";
    return execQuery($query);
}

function updateArticle($id, $title, $url, $descr_min, $description, $cid, $image) {
    $query = "UPDATE info SET title='".$title."', url='".$url."', descr_min='".$descr_min."', description='".$description."', cid=".$cid.", image='".$image."' WHERE id=".$id;
    return execQuery($query);
}

function logout() {
    clearcoolies();
    header('Location: /');
}



// myFumnctions

function logErrorDisplay($value) {
    $loginErrors = $value;
    return true;
}

function checkUser() {
    if(isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
        $query = "SELECT id, login, hash, INET_NTOA(ip) as ip FROM users WHERE id = ".intval($_COOKIE['id'])." LIMIT 1 ";
        $user = select($query);
        if(count($user) === 0) {
            return false;
        } else {
            if($user['hash'] !== $_COOKIE['hash']) {
                // echo '<pre>';
                // var_dump($user);
                // var_dump($_COOKIE['hash']);
                return true;
            }
            // $_GET['login'] = $user['login'];
            // return true;
        }

    } else {
        return false;
    }
}