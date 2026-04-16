<?php
if(isset($_COOKIE['uName'])){
    echo "Welcome back ".$_COOKIE['uName']."!<br>";
    echo "<a href='hw3_delcookie.php'>删除COOKIE</a><br><br>";
} 
?>

<form action="hw3_logincheck.php" method="POST">
ID: <input type="text" name="uID"><br>
Password: <input type="password" name="uPWD"><br>
<input type="submit" value="Login">
</form>
