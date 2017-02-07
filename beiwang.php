<?php
  include 'head.php';
?>
<title>记忆录</title>
<style type='text/css'>
  #beiwangtext p {word-break:break-word;
                 width:220px;
padding:10px;
border:5px solid green;
margin:5px;

                 
              }
</style>
<ol id='beiwangtext'>

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


$sql = "SELECT btext FROM beiwang";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<pre><p>". $row["btext"]." <a href='beiwang/del.php?neirong=".$row["btext"]."'>删除</a></p></pre>";
    }
} else {
    echo "暂时无哩...";
}
$conn->close();

?>
</ol><br><br>
添加：
<form action='beiwang/beiwang.php' method='post'>
<input type="text" name="btext" style='width:20%;word-break:break-word;
padding:10px;
border-width :1px;
    border-bottom-style:solid;
    border-right-style:solid;
    border-left-style:solid;
margin:2px;'><br>
<input type="submit" value="确定" style='width:5%;height:6%;word-break:break-word;
padding:10px;
border-width :1px;
    border-bottom-style:solid;
    border-right-style:solid;
    border-left-style:solid;
margin:2px;'><input type='reset'style='width:5%;height:6%;word-break:break-word;
padding:10px;
border-width :1px;
    border-style:solid;
margin:2px;' value="重置">
</form>
<?php
  include 'footer.php'
?>