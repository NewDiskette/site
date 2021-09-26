<?php
include("app/database/db.php");

//$isSubmit = false;
$errMsg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $admin = 0;
    $login = trim($_POST['login']);
    $email = trim($_POST['email']);
    $pass1 = trim($_POST['pass-first']);
    $pass2 = trim($_POST['pass-second']);
    
    if ($login === '' || $email === '' || $pass2 === '') {
        $errMsg = 'Не все поля заполнены!';
    }elseif (mb_strlen($login, 'UTF8') < 3) {
        $errMsg = 'Логин должен быть более 2-х символов';
    }elseif ($pass1 !== $pass2) {
        $errMsg = 'Пароли в обеих полях должны соответствовать!';
    
    } else {
        $pass = password_hash($pass2, PASSWORD_DEFAULT);
        $post = [
        'admin' => $admin,
        'username' => $login,
        'email' => $email,
        'password' => $pass
        ];

//        $id = insert(users, $post);
//        $isSubmit = true;
        tt($post);
    }
    


//    $last_row = selectOne(users, ['id' => $id]);
    
} else {
    echo 'GET';
    $login = '';
    $email = '';    
    
}

