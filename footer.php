<?php

    if($_GET['msg']) {
        echo '<script>showError("'.$_GET['msg'].'");</script>';
    }
