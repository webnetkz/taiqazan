<?php

// Отображение ошибок
if(isset($_GET['err'])) {
    echo '<script src="../public/js/error.js"></script>';
    echo '<script>showError("'.$_GET['err'].'");</script>';
}
