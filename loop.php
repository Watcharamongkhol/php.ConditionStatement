<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> การใช้คำสั่งแบบวนรอบ loop ใน php</h1>
    <?php
        echo"<h2>While loop</h2>";
        echo "<br>";
        $x = 1;
        while ($x <= 5) {
            echo "รอบที่ $x";
            $x++;
        }
        $i = 1;
        while ($i<=40) {echo"-"; $i++;}
            echo"<br>";
        
            echo"<h2>do..While loop</h2>";
        echo "<br>";
        $x = 1;
        do {echo "do ..While รอบที่ $x <br>";
            $x++;   
        } while ($x <= 5);
        echo "<br>";
        $y = 1;
        do {echo "do..While รอบที่ $y <br>";
            $y++;
        } while ($y <= 5);
    echo "-----------------------------------------------------------------------------<br>";
        echo"<h2>for loop</h2>";
        for ($i=0; $i < 10; $i++) { 
            echo "for รอบที่ $i <br>";
        }
     echo "-------------------------------------------------------";
     echo"<h2>for off for loop</h2>";
    
     for ($i = 0; $i < 6; $i++) { 
        echo str_repeat("*", times: $i + 0) . " <br>";
    }
    
    echo "-------------------------------------------------------";
    echo "<h2>Foreach Loop</h2>";
$pet = array("แมว", "สนัข", "นกแก้ว", "ปลาทอง", "หมูเด้ง");
foreach ($pet as $value) {
    echo "ฉันชอบ " . $value . "<br>";
}
    echo"--------------------------------------------------------------------";
    echo"<h2>Foreach loop แบบ Key => Value</h2>";
    $food = array("หมวย"=>"ส้มตำ","บูม"=>"หมูอย่าง","บีม"=>"ผักกระเพรา","อาร์ต"=>"ข้าวมันไก่") ;
    foreach ($food as $student => $value) {
        echo "ชื่อ$student ชอบกิน$value <br>";
    }
    
    
    ?>
</body>
</html>