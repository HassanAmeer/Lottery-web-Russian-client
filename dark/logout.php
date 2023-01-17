<?php
setcookie('coklog','allt',time() - 10000);
unset($_COOKIE['coklog']);
header('location:index.php');
?>