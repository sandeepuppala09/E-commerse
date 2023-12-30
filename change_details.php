<?php
    session_start();
    $user=$_SESSION['name'];
    $servername="localhost:3306";
    $username="root";
    $password="";
    $dbname="SKYTECH1";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    $sql="select * from USER_DATA_1 where name='$user'";
    $result=mysqli_query($conn,$sql);?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <?php
    while($row=mysqli_fetch_assoc($result)){
    ?>
    
    <body>
        <h2>Name:<?php echo $row['name']; ?></h2>
        <h2>password:<?php echo $row['password']; ?></h2>
        <h2>mail:<?php echo $row['mail']; ?></h2>
        <h2>mobile number:<?php echo $row['mobile_number']; ?></h2>
    </body>
    
    <?php
    }?>
    </html><?php
?>