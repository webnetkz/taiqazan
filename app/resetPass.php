<?php

    if(!empty($_POST['email']) && isset($_POST['send'])) {
        require_once './libs/db.php';

        $res = $pdo->query('SELECT `login` FROM users WHERE `login` ="'.$_POST['email'].'"');
        $res = $res->fetch(PDO::FETCH_ASSOC);

        if(!$res) {
            header('Location: ../pages/resetPass.php?msg=Такого пользователя не зарегистрированно');
        } else {
            echo 'Здесь отправляем ссылку на восстановления пароля';
        }
    } else {
        header('Location: ../index.php');
    }