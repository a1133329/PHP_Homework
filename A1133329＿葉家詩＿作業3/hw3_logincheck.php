<?php
session_start();

$sID = 'Wizzy';
$sPWD = '000000';

$tID = 'Tony';
$tPWD = '363636';

$aID = 'admin';
$aPWD = '123456';

if(isset($_POST["uID"]) && isset($_POST["uPWD"])){

    $uID = $_POST["uID"];
    $uPWD = $_POST["uPWD"];

    $expTime = time() + 3600;

    if($sID == $uID && $sPWD == $uPWD){
        $_SESSION['login'] = 'student';
        setcookie("uName", $uID, $expTime);
        header("Location: hw3_student.php");
        exit();
    }

    else if($tID == $uID && $tPWD == $uPWD){
        $_SESSION['login'] = 'teacher';
        setcookie("uName", $uID, $expTime);
        header("Location: hw3_teacher.php");
        exit();
    }

    else if($aID == $uID && $aPWD == $uPWD){
        $_SESSION['login'] = 'admin';
        setcookie("uName", $uID, $expTime);
        header("Location: hw3_admin.php");
        exit();
    }

    else {
        echo"Login Failed";
        header("Location: hw3_login.php");
        exit();
    }
}
?>