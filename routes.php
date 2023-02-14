<?php
require_once 'config/db.php';
require_once 'core/function_db.php';
require_once 'core/function.php';
$conn = connect();
$action = 'Update';


require_once __DIR__.'/router.php';
// POST
post('/registration', '/controls/regControl.php');
post('/login', '/controls/logControl.php');
post('/admin/Create', '/controls/createArticleControl.php');
post('/admin/update/Update', '/controls/updateControl.php');


// GET
if(isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {
    get('/admin', '/template/admin.php');
} else {
    get('/admin', '/template/login.php');
}
get('/', '/template/main.php');
get('/article/$url', '/template/article.php');
get('/admin/create', '/template/create.php');
get('/login', '/template/login.php');
get('/registr', '/template/registr.php');
get('/admin/delete/$id', 'template/CRUD/deleteArticle.php');
get('/admin/update/$id', '/template/update.php');
get('/cat/$categoryURI', '/template/cat.php');
get('/logout', '/template/logout.php');


any('/404','/template/404.php');
