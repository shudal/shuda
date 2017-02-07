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
$sql = "SELECT id,title,contents FROM blog order by id";
$result = $conn->query($sql);
function disp($stri){
    return htmlentities(base64_decode($stri));
}
echo '<ol>';
if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo '<li>  '.disp($row["title"])."  <a href='../blog/delr.php?id=".$row["id"]."'>删除</a>"."<a href='../blog/redit.php?id=".$row["id"]."'>&nbsp;重编</a></li>";
    }
} else {
    echo "暂时无哩...";
}

?>
</ol>