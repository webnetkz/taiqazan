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
 
    <header>
        <div class="lives">
            <img src="./public/imgs/heart.png" alt="heart">
        </div>
    </header>

    <div class="content">
        <div style="text-align: center; border-radius: 5px;">
            <img src="./public/imgs/screen_1.png" style=" border-radius: 7px; background: #1cb0f6;" alt="">
        </div>
        <div class="container">
            <div class="levelActive"></div>
        </div>
        <div class="container">
            <div class="level"></div>
            <div class="level"></div>
        </div>
        <div class="container">
            <div class="level"></div>
        </div>
        <div class="container">
            <div class="level"></div>
            <div class="level"></div>
        </div>
        <div class="container">
            <div class="level"></div>
            <div class="level"></div>
            <div class="level"></div>
        </div>
        <div class="container">
            <div class="level"></div>
        </div>
        <div class="container">
            <div class="level"></div>
            <div class="level"></div>
        </div>
    </div>

    <footer>
        <div class="footerElement" onclick="location.href='./app.php'">
            <img src="./public/imgs/home.png" alt="hourse">
        </div>
        <div class="footerElement" onclick="location.href='./user.php'">
            <img src="./public/imgs/profile.png" alt="hourse">
        </div>
        <div class="footerElement" onclick="location.href='./settings.php'">
            <img src="./public/imgs/settings.png" alt="hourse">
        </div>
    </footer>

    <script src="./public/js/app.js"></script>
    <script src="./public/js/error.js"></script>
</body>
</html>
<?php

    require_once './footer.php';

?>