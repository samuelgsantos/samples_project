<?php
session_start();
setcookie('cart', 1, time() - 3600); 
    header("Location:index.php");
?>