<?php

    require_once './libs/settings.php';

    if(!empty($_POST['email']) && isset($_POST['email'])) {
        require_once './libs/db.php';

        session_start();
        $_SESSION['login'] = $_POST['login'];

        $checkLogin = $pdo->query('SELECT * FROM users WHERE `login` ="'.$_POST['email'].'"');
        $checkLogin = $checkLogin->fetch(PDO::FETCH_ASSOC);

        if($checkLogin == false) {
            header('Location: ../pages/signin.php?err=Пользователь с таким логином не зарегистрирован!');
        } else {
            if($checkLogin['pass'] == $_POST['pass']) {
                header('Location: ../app.php');
            } else {
                header('Location: ../pages/signin.php?err=Не верный пароль!');
            }
        }
    } else {
        header('Location: ../pages/signin.php?err=Введите логин!');
    }