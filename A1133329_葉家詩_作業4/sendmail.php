<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$link = mysqli_connect("localhost","root","","homework4");

if(!$link){
    die("連線失敗");
}

$subject = $_POST['subject'];

$content = $_POST['content'];

$type = $_POST['type'];

$count = $_POST['count'];

$second = $_POST['second'];

if($type=="all"){

    $sql = "SELECT * FROM mail";

}
else{

    $sql = "SELECT * FROM mail
            ORDER BY RAND()
            LIMIT $count";
}

$result = mysqli_query($link,$sql);

$total = mysqli_num_rows($result);

$now = 0;

?>

<html>
<head>
    <title>寄送進度</title>
</head>

<body>

<h2>寄送進度</h2>

<?php

while($row=mysqli_fetch_assoc($result)){

    $to = $row['email'];

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'a1133329@mail.nuk.edu.tw';
    $mail->Password = 'cosh yeus zfpd xqly';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('a1133329@mail.nuk.edu.tw');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $content;
    $mail->send();

    echo "成功寄送至: ".$to;

    $now++;

    $percent = ($now / $total) * 100;

    echo "<br> 進度 : ".round($percent)."%";
    echo "<hr>";

    sleep($second);
}

echo "傳送完成!";

?>

<br><br>

<a href="index.php">回首頁</a>

</body>
</html>