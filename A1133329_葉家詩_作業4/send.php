<html>
    <head>
        <title>寄送郵件</title>
    </head>
    <body>
        <form action="sendmail.php" method="post">
            主旨：<br>
            <input type="text" name = "subject"><br>

            <br>

            內容： <br>
            <textarea name="content" rows="5" cols="40"></textarea><br>

            <br>

            寄送方式：<br>
            <select name="type">
                <option value="all">全部寄送</option>
                <option value="random">隨機寄送</option>
            </select><br>

            <br>

            隨機寄送幾筆：<br>
            <input type="number" name="count">筆<br>
            
            <br>

            間隔秒數：<br>
            <input type="number" name="second" value="1"><br>

            <br>

            <input type="submit" value="傳送">
        </form>
        <br>
        <a href="index.php">回首頁</a>
    </body>
</html>