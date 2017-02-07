<script>setTimeout("javascript:location.href='http://shuda.site/admin/havelogin.php'",3000 ); </script>
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
$conn->query("SET NAMES 'UTF8'");
$title=$_POST["title"];
$contents=$_POST["contents"];
$tags=$_POST['tags'];
$id=$_POST['id'];
$title=base64_encode($title);
$contents=base64_encode($contents);
$tags=base64_encode($tags);

$sql = "UPDATE blog SET title ='".$title."'".' , contents ="'.$contents.'"'.' ,tags="'.$tags.'"'.'
WHERE id ="'.$id.'"';

if ($conn->query($sql) === TRUE) {
    echo "<br>修改成功哩...";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>