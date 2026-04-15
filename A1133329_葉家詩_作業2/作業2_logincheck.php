<?php

$fID = 'Olivia';
$fPWD = '321123';

$uID = $_POST["uID"];
$uPWD = $_POST["uPWD"];

    if($fID == $uID && $fPWD == $uPWD){
        header("Location: 作業1_regisform.php");
        exit();
    }else {
        echo "Login failed";
        header("Location: 作業2_login.php");
        exit();
    }

?>