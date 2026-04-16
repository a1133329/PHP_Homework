<?php
session_start();

if(isset($_SESSION['login']) && ($_SESSION['login'] == 'student' || $_SESSION['login'] == 'admin')){

    echo "<h1>STUDENT PAGE</h1>";
    echo "Welcome " . $_COOKIE['uName'] . "!<br>";
    echo "<a href='hw3_logout.php'>Logout</a>";

}else{
    header("refresh:2; url=hw3_login.php");
    echo "Access denied!";
    exit();
}
?>