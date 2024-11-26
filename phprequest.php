<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>การใช้ PHP REQUEST $_REQUEST</title>
</head> 
    <body>
        <h1>โปรดกรอกชื่อของท่าน</h1>
        <form accept="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        โปรดกรอกชื่อ : <input type="text" name="fname">
        <input type="submit">
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                 //$name = htmlspecialchars($_REQUEST['fname']);
                 $name = htmlspecialchars($_POST['fname']);
                if(empty($name)) {  
                    echo "ชื่อเป็นที่ว่าง" ;
                }else{
                    echo"ยินดีต้อนรับคุณ".$name;
                    }

                }

        ?>
    </body>
</html>