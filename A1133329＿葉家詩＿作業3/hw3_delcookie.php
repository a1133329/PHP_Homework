<?php

setcookie('uName', '', time() - 10);
header("Location: hw3_login.php");
?>