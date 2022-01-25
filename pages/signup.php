<?php
    require_once '../header.php';
?>
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
 
    <form action="../app/signup.php" class="singin" method="POST">
        <div style="height: 40px; display: flex; align-items: center; justify-content: center;">
            <img src="../public/imgs/close.png" class="closeShowSignin" onclick="location.href = '../index.php'">
            <p style="font-weight: 800; font-size: 0.8rem;">Введите данные для регистрации</p>
        </div>

        <div class="signinInputs">
            <input type="text" name="login" value="<?php if(isset($_SESSION['login'])) { echo $_SESSION['login'];} ?>" class="inp" placeholder="Email" style="border-bottom: 1px solid var(--grayTwoColor);border-top-left-radius: 9px;border-top-right-radius: 9px;">
            <input type="password" name="pass" class="inp" placeholder="Пароль">
            <input type="password" name="pass2" class="inp" placeholder="Повторите пароль" style="border-bottom-left-radius: 9px;border-bottom-right-radius: 9px;">
        </div>

        <div style="margin-top: 15px;">
            <button class="btn-gray" type="submit">Регистрация</button>
        </div>
    </form>

    <script src="../public/js/app.js"></script>
</body>
</html>
<?php

    require_once '../footer.php';

?>