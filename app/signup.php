<?php

require_once './libs/db.php';
require_once './libs/settings.php';

if(!empty($_POST['login']) && isset($_POST['login'])) {

    session_start();
    $_SESSION['login'] = $_POST['login'];

    $checkLogin = $pdo->query('SELECT `login` FROM users WHERE `login` = "'.$_POST['login'].'"');
    $checkLogin = $checkLogin->fetch(PDO::FETCH_ASSOC);

    if($checkLogin == false) {
        if(!empty($_POST['pass']) && isset($_POST['pass'])) {
            if(!empty($_POST['pass2']) && isset($_POST['pass2'])) {
                if($_POST['pass'] == $_POST['pass']) {
                    
                    $pdo->query('INSERT INTO users(`login`, `pass`) VALUES("'.$_POST['login'].'", "'.$_POST['pass'].'")');
                    header('Location: ../app.php');
                } else {
                    header('Location: ../pages/signup.php?err=Пароли не совпадают!');
                }
            } else {
                header('Location: ../pages/signup.php?err=Введите повторно пароль!');
            }
        } else {
            header('Location: ../pages/signup.php?err=Введите пароль!');
        }
    } else {
        header('Location: ../pages/signup.php?err=Имя пользователя занято!');
    }
} else {
    header('Location: ../pages/signup.php?err=Введите логин!');
}





    require_once './libs/db.php';

    $res = $pdo->query('SELECT `login` FROM users WHERE `login` ="'.$_POST['email'].'"');
    $res = $res->fetch(PDO::FETCH_ASSOC);

    if(!$res) {
        echo 'Такого логина нет';
    } else {
        echo 'Здесь отправляем ссылку на восстановления пароля';
    }