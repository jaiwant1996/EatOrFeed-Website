<?php
session_start();

unset($_SESSION['sessionUser']);
session_unset();
session_destroy();
header('location:index.php')
?>