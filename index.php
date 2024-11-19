<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
                <h1>การใช้คำสั่งแบบ Condition (กลุ่มคำสั่ง if)</h1>
            
            <?php
                echo "<h2> คำสั่ง if </h2>";
            $x = 5;
            $y = 8;
            echo"\$x = $x";
            echo"\$y = $y";
        if($x<$y){
            echo "คำในตัวแปร x น้อยกว่าค่าในตัวแปร y <br>";
        }
        else{
            echo "ค่าในตัวแปร Y  น้อยกว่าค่าในตัวแปร ป <br> ";
        }
        echo "--------------------------------------";
        
        echo "<h2> Short hand if </h2>";
        $score = 55 ;
        if($score >= 50) echo"ขอแสดงความเย็นดีคุณสอบผ่าน";
        echo"<br>";
        $result = $score>= 50 ? "ได้เกรด A": "ได้เกรด F";
        echo"<br>";
        echo " ผลการเรียนของคุณ".$result;
        echo "<br>";
        echo "----------------------------------------------------";
        echo "<h2> Switch Case </h2>";
        echo "<br>";
        $pet = 'Cat';
        
        switch ($pet) {
            case 'cat':
                echo "คุณชอบนอนเหมือนแมว <br>";
                break;
                
            case 'Dog':
                    echo "คุณเห่าเหมือนสุนัข <br>";
                    break;
            
            case 'Bird':
                    echo "คุณพูดมากเหมือนนก <br>";
                    break;

                default:
                echo "คุณเป็นมนุษย์ Introvert <br>";
                break;
        }
            echo"<br>";
        echo "---------------------------------------------------------------";


?>
                </body>
</html>