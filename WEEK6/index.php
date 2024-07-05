<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="func.js"></script>
</head>

<div class="contaiter">
    <div class="select_opt">
        <button onclick="stdForm()">นักเรียน</button>
        <button onclick="teaForm()">ครู</button>
        <button onclick="regForm()">สมัคสมาชิก</button>
    </div>
</div>
<div class="form-1" id="stdForm">
    <form action="autp.php" method="get">
        <p>ฟอร์มลงชื่อเข้าใช้ของนักเรียน</p>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="เข้าสู่ระบบ" placeholder="Singin">
    </form>
</div>
<div class="form-2" id="teaForm">
    <form action="autp.php" method="get">
        <p>ฟอร์มลงชื่อเข้าใช้ของครู</p>
        <input type="text" name="username" placeholder="Username"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="submit" name="เข้าสู่ระบบ" placeholder="Singin">
    </form>
</div>
<div class="form-3" id="regForm">
    <form action="signup.php" method="get">
        <p>ฟอร์มสมัคสมาชิก</p>
        <input type="text" name="fullname" placeholder="Fullname"><br>
        <label for="gender">เพศ: </label>
        <select name="gender" id="gender">
            <option value="male">ผู้ชาย</option>
            <option value="female">ผู้หญิง</option>
            <option value="ladyboy">กระเทย</option>
            <option value="femboy">เฟมบอย</option>
            <option value="ginger">ขิง</option>
            <option value="lemonade">น้ำมะนาว</option>
        </select><br>
        <input type="Age" name="Age" min="1" max="100" placeholder="Age"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="re-enter Password" placeholder="Re-enter Password"><br>
        <input type="submit" name="เข้าสู่ระบบ" placeholder="Singin"><br>
    </form>
</div>


</body>


</html>