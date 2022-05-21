<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title></title>
</head>
<body>
    <div class="content">
        <div style="float:left">
            <?php
                $connect = mysqli_connect("localhost","root","","mydb");
                $id= $_GET["id"];
                $sql= "select * from product where product_id= {$id}";
                $result= mysqli_query($connect, $sql);
                while($row= mysqli_fetch_array($result))
            ?>
            <img src="X/<?php echo $row['product_img']; ?>" width="400px" height="400px" />
        </div>
        <div>
            
        </div>
    </div>
</body>
</html>