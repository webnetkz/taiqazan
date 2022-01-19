<?php

    if(!empty($_POST['email']) && isset($_POST['email'])) {
        require_once './libs/db.php';

        $res = $pdo->query('SELECT `login` FROM users WHERE `login` ="'.$_POST['email'].'"');
        $res = $res->fetch(PDO::FETCH_ASSOC);

        if(!$res) {
            echo 'Такого логина нет';
        } else {
            echo 'Здесь отправляем ссылку на восстановления пароля';
        }
    } else {
        header('Location: ../pages/signin.html?err=Введите логин!');
    }