<?php
session_start();

if(isset($_SESSION['login']) && $_SESSION['login'] == 'admin'){

    echo "<h1>ADMIN PAGE</h1>";
    echo "Welcome " . $_COOKIE['uName'] . "!<br>";

    echo "<h3>Access to:</h3>";
    echo "<a href='hw3_student.php'>Go to Student Page</a><br>";
    echo "<a href='hw3_teacher.php'>Go to Teacher Page</a><br><br>";
    echo "<a href='hw3_logout.php'>Logout</a>";

}else{
    header("refresh:2; url=hw3_login.php");
    echo "Access denied!";
    exit();
}
?>