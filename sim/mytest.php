<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>数据库测试</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: xiaotian
 * Date: 2016/5/11
 * Time: 14:51
 */
//echo PHPinfo();
$conn = mysqli_connect('localhost:3307','root','1995');
if($conn){
    echo "连接成功";
}else echo "连接失败";
$data = mysqli_query($conn,'select * from USER ')->fetch_array();
echo $data;
mysqli_close($conn);
?>
</body>
</html>
