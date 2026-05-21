<?php
$link = mysqli_connect('localhost', 'root', '', 'homework4');

if(!$link){
    die("連線失敗");
}

if(isset($_POST['add'])){
    $email = $_POST['email'];

    $sql = "INSERT INTO mail(email) VALUES('$email')";

    mysqli_query($link, $sql);
}

$result = mysqli_query($link, "SELECT * FROM mail");

?>

<html>
    <head>
        <title>Input Email</title>
    </head>
    <body>
        <form method="post">
            EMAIL:
            <input type="email" name="email">
            <input type="submit" name="add" value="Add">
        </form>

        <br>

        <table border="1" cellpadding = "8">
            <tr>
                <td>No</td>
                <td>Email</td>
            </tr>

            <?php
            while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['no']?></td>
                <td><?php echo $row['email']?></td>
            </tr>
            <?php
            }
            ?>
        </table>
        <br>

        <a href="index.php">Back</a>
    </body>
</html>