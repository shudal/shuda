<script>setTimeout("javascript:location.href='http://shuda.site/admin/havelogin.php'",1 ); </script>
<?php
$servername = "localhost";
$username = "shudasit_shuda";
$password = "ma18223";
$dbname = "shudasit_shuda";

// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$id=$_GET["id"];
$sql='DELETE FROM data WHERE id ="'.$id.'"';
mysqli_query($conn,$sql);
mysqli_close($conn);
?>