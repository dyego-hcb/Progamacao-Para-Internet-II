<?php
    session_start();
    unset($_SESSION['fieldEmail']);
    unset($_SESSION['fieldSenha']);
    header("Location: home.php");
?>