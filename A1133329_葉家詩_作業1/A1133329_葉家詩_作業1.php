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

        <form action="">
        姓名:<input type="text" placeholder="Your Name" name="nName"><br>

        學系:<input type="text" placeholder="Department" name="nDepartment"><br>

        性别:
        男<input type="radio" name="nGender" value="M">
        女<input type="radio" name="nGender" value="F" checked><br>
        
        生日:<input type="date" name="nDate" value="d"><br>

        年齡:<input type="range" min="15" max="40" value="25" oninput="ageValue.innerText = this.value">
        <span id="ageValue">25</span><br>

        手機:<input type="tel" name="nPhone"><br>

        E-mail:<input type="email" name="nEmail"><br>

        緊急聯絡:<input type="tel" name="nEmergencyContact"><br>

        備註:<br>
        <textarea name="comment" rows ="10" cols="40">
            Input your comments
        </textarea>
        <br>
        <input type="submit" value="Submit"><input type="reset">
        </form>
        
    </body>
</html>