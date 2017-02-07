<script>setTimeout("javascript:location.href='http://shuda.site/admin/havelogin.php'",3000 ); </script>
</a>
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
$title=$_POST["title"];
$contents=$_POST["contents"];
$lei=$_POST['lei'];
$tags=$_POST['tags'];
$title=base64_encode($title);
$contents=base64_encode($contents);
date_default_timezone_set(PRC);
$time=date('Y-m-d H:i:s');
$tags=base64_encode($tags);
$sql = "INSERT INTO blog (title,contents,lei,date,tags)
VALUES ('$title','$contents','$lei','$time','$tags')";

if ($conn->query($sql) === TRUE) {
    echo "<br>发表成功哩...";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>