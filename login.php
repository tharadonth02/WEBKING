<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <body>
    <link rel="stylesheet" href="css_login.css">    
     
    <div class="form">
     <form action="login" method="POST"> 
        <br>
        <h1>สมัครสมาชิก</h1>
        <br>
           
        <div  class="form_12">
            <label for="user_name">ชื่อผู้ใช้</label>
            <input type="text" id="user_name" name="user_name" required>

        </div><br>

        <div class="form_12">
            <label for="password">รหัสผ่าน</label>
            <input type="password" id="password" name="password" required> 
        </div><br>
        <div class="form_12">
            <label for="confirm_password">ยืนยันรหัสผ่าน</label>
            <input type="password" id="confirm_password" name="confirm_password" required> 
        </div><br>
        <div class="form_12">
            <label for="email">เมล</label>
            <input type="email" id="email" name="email" required>
        </div> <br>

        <button type="submit" class="submit">ล็อกอิน</button> 
        <br><br>
            <a href="indix.php">ถ้ามี "บัญชีอยู่แล้ว" คลิก</a>
            <br><br><br>
    </form>
 </div>
</body>
    
</body>
</html>