<?php
/**
 * Created by PhpStorm.
 * User: 赵楠
 * Date: 2019/1/31
 * Time: 11:07
 */

header("Content-type:text/html;charset=UTF-8");
//$data=json_decode($_POST['data']);
$data=$_POST['data'];
//echo("是否接受到数据：".$data[1]).'\n';
//echo("data是不是字符串：".is_string($data).'\n');

$servername = "localhost";
$username = "root";
$password = "123456";
$dbname = "ueditorDB";

// 创建连接
//$mysqli->set_charset('utf8');
$conn = new mysqli($servername, $username, $password, $dbname);
// 修改数据库连接字符集为 utf8
mysqli_set_charset($conn,"utf8");
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

// 查询语句
$sql_query = 'SELECT id=36 FROM content';

// 插入语句
$sql = "INSERT INTO context (id ,context) VALUES (null,'$data')";
//insert into tbl (id, name，email) values (null,’liu’,’123@163.com’));
if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}




$conn->close();



?>