<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset password</title>



    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
    </style>
    <link rel="stylesheet" href="../public/styles/style.css">
</head>
<body>
 
    <form action="../app/resetPass.php" class="resetPass" method="POST">
        <div style="height: 40px; display: flex; align-items: center; justify-content: center;">
            <img src="../public/imgs/close.png" class="closeShowSignin" onclick="location.href = '../index.php'">
        </div>

        <div>
            <h2 style="color: white">Забыли пароль?</h2>
            <p style="color: white">Введите адрес эл.почты, чтобы получить ссылку для сброса пароля.</p>
        </div>
        <form action="app/resetPass.php" method="POST">
            <input type="email" class="inp" name="email" placeholder="Имя пользователя или email" style="border-bottom: 1px solid var(--grayTwoColor);border-radius: 9px;" required>

            <div style="margin-top: 15px;">
                <button class="btn-gray" type="submit" name="send">Получить ссылку</button>
            </div>
        </form>
    </form>


    <script src="../public/js/app.js"></script>
    <script src="../public/js/error.js"></script>
</body>
</html>
<?php

    require_once '../footer.php';

?>