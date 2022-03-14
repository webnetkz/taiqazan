<?php

  require_once './libs/settings.php';
  session_start();
  unset($_SESSION);
  header('Location: ../pages/signin.php?err=Вы успешно вышли!');