<?php

require_once 'header.php';

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
    <link rel="stylesheet" href="./public/styles/style.css">
</head>
<body>
 
    <img src="./public/imgs/logo.png" class="logo">
    <div class="description">
        <h2>Taiqazan</h2>
        <p>Изучайте казахский с нами. Всегда бесплатно.</p>
    </div>

    <button class="btn" style="position: fixed; top: 80vh;" onclick="location.href = './pages/signup.php'">Регистрация</button>
    <button class="btn-cl" style="position: fixed; top: 87vh;" onclick="location.href = './pages/signin.php'">Авторизоваться</button>


    <script src="./public/js/app.js"></script>
    <script src="./public/js/error.js"></script>
</body>
</html>
<?php

    require_once './footer.php';

?>
