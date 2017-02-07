<script>setTimeout("javascript:location.href='http://shuda.site/beiwang.php'",1 ); </script>
<a href='http://www.shuda.site/'>树大</a>  <a href='http://www.shuda.site/beiwang.php'>备忘录</a><br>
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


$btext=$_POST["btext"];
$sql = "INSERT INTO beiwang (btext)
VALUES ('$btext')";

if ($conn->query($sql) === TRUE) {
    echo "添加成功！";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>