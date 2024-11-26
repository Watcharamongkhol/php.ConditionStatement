<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>PHP Global Variable Example</title>
        <meta name="description" content="Example of using global variables in PHP">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Global Variable</h1>
        <?php
            $x = 75;
            echo "ค่าของ x ==> " . $x;

            function myfunction() {
                global $x;
                $x = 35;
                echo "<br>อ่านจาก Function ค่าของ x ==> " . $GLOBALS['x'];
            
            
            }
        
            myfunction();
            echo"<br>";
            echo "ค่าของ x ==>". $x;
            
            echo "<hr>";
            echo "<h2>การใช้ขอมูลจาก Server \$_SERVER</h2>";
            
            echo $_SERVER['PHP_SELF'];
            echo '<br>';
            echo $_SERVER['SERVER_NAME'];
            echo '<br>';
            //echo $_SERVER['HTTP_REFERER'];
            echo '<br>';
            echo $_SERVER['HTTP_USER_AGENT'];
            echo '<br>';
            echo $_SERVER['SCRIPT_NAME'];
            
            echo '<hr>';
        
        ?>
        
        <script src="" async defer></script>
    </body>
</html>
