<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="stlye.css">
</head>
<body>
    
    <div class="form">
     <form action="login" method="POST"> 
        <br>
        <h1>เข้าสู่ระบบ</h1>
            <img width=150 height=200 src="https://img.freepik.com/free-vector/bird-colorful-gradient-design-vector_343694-2506.jpg?semt=ais_hybrid&w=740&q=80" alt="">
        <div class="form_user">
            <br>
            <label for="user_name">ชื่อผู้ใช้</label>
            <input type="text" id="user_name" name="user_name" required>
        </div>

        <div class="form_pass">
            <label for="password">รหัสผ่าน</label>
            <input type="password" id="password" name="password" required>
        </div> <br>


        <button type="submit" class="submit">ล็อกอิน</button> <br><br>
      <a href="login.php">สมัครสมาชิก</a>
      <br><br>
     </form> 
    </div>
   
</body>
</html>