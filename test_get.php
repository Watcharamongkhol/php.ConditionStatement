<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GET Method Example</title>
    </head>
    <body>
        <h1>ทดสอบรับค่าจาก Method GET (ผ่าน URL)</h1>
        <?php
            if (isset($_GET['subject']) && isset($_GET['web'])) {
                echo "ศึกษาเรื่อง: " . htmlspecialchars($_GET['subject']) . " ได้ที่ " . htmlspecialchars($_GET['web']);
            } else {
                echo "กรุณาใส่ค่าที่ต้องการใน URL";
            }
        ?>
    </body>
</html>
