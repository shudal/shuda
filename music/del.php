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


$nei='';
echo '<br>删除内容:'.$nei.'<br>';
$sqlt="DELETE FROM music where singer=''";
$result = mysqli_query($conn,$sqlt);
if($result){
echo "删除成功";
}else{
echo "删除失败：".mysql_error();
}
mysqli_close($conn);

?>