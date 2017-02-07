<script>setTimeout("javascript:location.href='http://shuda.site/admin/havelogin.php'",1 ); </script>
<?php
$servername = "localhost";
$username = "shudasit_shuda";
$password = "ma18223";
$dbname = "shudasit_shuda";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$conn->query("SET NAMES 'UTF8'"); 
$btext=$_POST["btext"];
$btext=base64_encode($btext);
date_default_timezone_set(PRC);
$time=date('Y-m-d H:i:s');

$sql = "INSERT INTO shuo (shuoshuo,date)
VALUES ('$btext','$time')";

if ($conn->query($sql) === TRUE) {
    echo "添加成功！";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>