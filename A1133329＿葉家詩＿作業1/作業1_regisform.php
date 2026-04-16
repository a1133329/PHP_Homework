<html>
    <head>
        <title>
            Registration Form
        </title>
    </head>
    <body bgcolor="lightblue">
        <h1>夏令營報名表</h1>
        <p style="font-family: Georgia; color: red"><b>Limited spots available — don't miss out, register now!!!</b></p>
        <h2>👇👇👇</h2>
        <hr color="white">

        <form action="作業2_result.php" method="POST">
        姓名:<br>
        <input type="text" placeholder="Your Name" name="nName"><br>

        學系:
        <br><input type="text" placeholder="Department" name="nDepartment"><br>

        性别:
        <br>
        男<input type="radio" name="nGender" value="M">
        女<input type="radio" name="nGender" value="F" checked><br>
        
        生日:
        <br><input type="date" name="nBday" value="d"><br>

        年齡:<br>
        <input type="range" name="nAge" min="15" max="40" value="25" oninput="ageValue.innerText = this.value">
        <span id="ageValue">25</span><br>

        手機:<br>
        <input type="tel" name="nPhone"><br>

        E-mail:<br>
        <input type="email" name="nEmail"><br>

        緊急聯絡:<br>
        <input type="tel" name="nEmergencyContact"><br>

        備註:<br>
        <textarea name="comment" rows ="10" cols="40"></textarea>
        <br>
        <input type="submit" value="Submit"><input type="reset">
        </form>
        
    </body>
</html>