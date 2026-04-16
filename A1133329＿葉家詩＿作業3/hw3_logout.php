<?php
session_start();
session_destroy();

header("Location: hw3_login.php");
exit();
?>