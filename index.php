<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>การใช้คำสั่งแบบ Condition</title>
        <meta name="description" content="แสดงตัวอย่างการใช้คำสั่งแบบเงื่อนไขใน PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f9f9f9;
                margin: 0;
                padding: 20px;
                color: #333;
            }
            h1, h2 {
                color: #0056b3;
            }
            .container {
                max-width: 800px;
                margin: auto;
                background: #fff;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
            }
            hr {
                border: none;
                border-top: 1px solid #ddd;
                margin: 20px 0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>การใช้คำสั่งแบบ Condition (กลุ่มคำสั่ง if)</h1>
            
            <?php
                echo "<h2>คำสั่ง if</h2>";
                $x = 5;
                $y = 8;
                echo "<p>ค่า <code>\$x</code> = $x</p>";
                echo "<p>ค่า <code>\$y</code> = $y</p>";
                if ($x < $y) {
                    echo "<p>ค่าของตัวแปร <code>x</code> น้อยกว่าค่าของตัวแปร <code>y</code></p>";
                } else {
                    echo "<p>ค่าของตัวแปร <code>y</code> น้อยกว่าค่าของตัวแปร <code>x</code></p>";
                }
                echo "<hr>";

                echo "<h2>Short hand if</h2>";
                $score = 55;
                if ($score >= 50) {
                    echo "<p>ขอแสดงความยินดี คุณสอบผ่าน!</p>";
                }
                $result = $score >= 50 ? "ได้เกรด A" : "ได้เกรด F";
                echo "<p>ผลการเรียนของคุณ: <strong>$result</strong></p>";
                echo "<hr>";

                echo "<h2>Switch Case</h2>";
                $pet = 'Cat';
                switch (strtolower($pet)) { // ทำให้ตัวอักษรเล็กเพื่อเทียบเงื่อนไขได้ง่ายขึ้น
                    case 'cat':
                        echo "<p>คุณชอบนอนเหมือนแมว</p>";
                        break;
                    case 'dog':
                        echo "<p>คุณเห่าเหมือนสุนัข</p>";
                        break;
                    case 'bird':
                        echo "<p>คุณพูดมากเหมือนนก</p>";
                        break;
                    default:
                        echo "<p>คุณเป็นมนุษย์ Introvert</p>";
                        break;
                }
            ?>
        </div>
    </body>
</html>
