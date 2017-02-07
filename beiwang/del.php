<script>setTimeout("javascript:location.href='http://shuda.site/beiwang.php'",1 ); </script>
<a href='http://www.shuda.site/'>树大</a>  <a href='http://www.shuda.site/beiwang.php'>备忘录</a><br>
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


$nei=$_GET['neirong'];
echo '<br>删除内容:'.$nei.'<br>';
$sqlt="DELETE FROM beiwang WHERE btext='".$nei."'";
$result = mysqli_query($conn,$sqlt);
if($result){
echo "删除成功";
}else{
echo "删除失败：".mysql_error();
}
mysqli_close($conn);

?>