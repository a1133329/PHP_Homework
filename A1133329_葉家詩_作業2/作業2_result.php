<?php

$nName = $_POST["nName"];
$nDept = $_POST["nDepartment"];
$nGender = $_POST["nGender"];
$nBday = $_POST["nBday"];
$nAge = $_POST["nAge"];
$nPhone = $_POST["nPhone"];
$nEmail = $_POST["nEmail"];
$nEmergencyContact = $_POST["nEmergencyContact"];
$nComment = $_POST["comment"];


echo "<body style='background-color:pink;'>";
echo "<h2>🎉 報名成功！ 🎉</h2>";
echo "<hr style='color:grey;'>";

echo "<h3>以下是您的報名資料：</h3>";

echo " 姓名：".$nName."<br>";
echo " 學系：".$nDept."<br>";

echo " 性別：";
if($nGender == "M"){
    echo "男<br>";
}else{
    echo "女<br>";
}

echo " 生日：".$nBday."<br>";
echo " 年齡：".$nAge."<br>";
echo " 手機：".$nPhone."<br>";
echo " Email：".$nEmail."<br>";
echo " 緊急聯絡：".$nEmergencyContact."<br>";
echo " 備註：".$nComment."<br>";

echo "<hr>";
echo " 感謝您的報名！";
?>