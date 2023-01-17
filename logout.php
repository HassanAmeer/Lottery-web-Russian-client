<?php
setcookie('coklog','all',time() - 10000);
unset($_COOKIE['coklog']);
header('location:index.php');
?>