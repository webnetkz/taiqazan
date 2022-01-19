<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taiqazan</title>



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
    </style>
    <link rel="stylesheet" href="../public/styles/style.css">
</head>
<body>
 
    <form action="../app/signin.php" class="singin" method="POST">
        <div style="height: 40px; display: flex; align-items: center; justify-content: center;">
            <img src="../public/imgs/close.png" class="closeShowSignin" onclick="location.href = '../index.php'">
            <p style="font-weight: 800; font-size: 0.8rem;">Введите данные</p>
        </div>

        <div class="signinInputs">
            <input type="text" class="inp" placeholder="Имя пользователя или email" style="border-bottom: 1px solid var(--grayTwoColor);border-top-left-radius: 9px;border-top-right-radius: 9px;">
            <input type="password" class="inp" placeholder="Пароль" style="border-bottom-left-radius: 9px;border-bottom-right-radius: 9px;">
            <img src="../public/imgs/view.png" class="viewPass" onclick="this.previousSibling.previousSibling.type='text'">
        </div>

        <div style="margin-top: 15px;">
            <button class="btn-gray">Войти</button>
        </div>

        <div>
            <a href="#" class="link" onclick="location.href = 'resetPass.php'">Забыли пароль?</a>
        </div>
    </form>

    <script src="../public/js/app.js"></script>
</body>
</html>
<?php

    require_once '../footer.php';

?>