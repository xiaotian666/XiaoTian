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
    $conn = new mysqli('localhost:3307', 'root', '1995','mytest');
    mysqli_set_charset($conn, 'utf8');
    if ($conn) {
        echo "连接成功";
    } else echo "连接失败";
    echo '<br>';
    $data = 'select * from USER ';
    $result = $conn->query($data)->fetch_array();
    echo '<table>';
    echo '<tr>';
    echo '<td>'."学生号 &nbsp&nbsp: 名字 : 年龄".'<br>';
    while(list($id,$age,$name) = $result->fetch_row())
    {
        echo "$id : $age : $name ".'<br>';

    }
    echo '</td>';
    echo '</tr>';
    echo'</table>' ;
    $conn->close();
?>
</body>
</html>
