<?php
  include '../head.php';
?>
<!DOCTYPE html>
<style>
input[type="submit"]
{
    width:5%;height:6%;word-break:break-word;
padding:10px;
border-width :1px;
    border-style:solid;
margin:2px;
}
input[type="reset"]
{
    width:5%;height:6%;word-break:break-word;
padding:10px;
border-width :1px;
    border-style:solid;
margin:2px;
}
</style>
<title>管理哩</title>
Music<br><br>
添加：<br>
<form action='../music/add.php' method='post'>
歌手：<select name="singer" onchange="this.parentNode.nextSibling.value=this.value">
   <option value="">请选择 </option>  
   <option value="Taylor Swift">Taylor Swift</option>
   <option value="Avril Lavigne">Avril Lavigne</option>
   <option value="双笙">双笙</option>
   <option value="others">others</option>
</select>OR输入:
   <input type='text' name='singers'>
   <br>
名称：<input type="text" name="mname"><br>
地址：<input type="text" name="msrc"><br>
歌词：<textarea name="msys"  style=
padding:10px;
border-width :1px;
    border-style:solid;
margin:2px;' rows='7'></textarea><br>
<input type="submit" value="提交"><input type='reset' value="重置">
</form>

Video<br><br>
添加视频：<br>
<form action='../vide/add.php' method='post'>
类别：<select name="lei" onchange="this.parentNode.nextSibling.value=this.value">
   <option value="">请选择 </option>  
   <option value="Out Wall">Out Wall</option>
   <option value="Out Wall wa">Out Wall!</option>
   <option value="Bili">Bili</option>
   <option value="other">other</option>
</select>OR输入:
   <input type='text' name='leis'>
   <br>
名称：<input type="text" name="mname"><br>
地址：<input type="text" name="msrc"><br>
<input type="submit" value="提交"><input type='reset' value="重置">
</form><br>
添加说说：
<form action='../blog/btwiadd.php' method='post'>
<input type="text" name="btext" style='width:65%;word-break:break-word;
padding:10px;
border-width :1px;
    border-bottom-style:solid;
    border-right-style:solid;
    border-left-style:solid;
margin:2px;' rows='7'><br>
<input type="submit" value="提交"><input type='reset' value="重置">
</form>
删除说说：<br><ol>
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
$sql = "SELECT shuoshuo,id FROM shuo order by id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<li>". base64_decode($row["shuoshuo"])."  <a href='../blog/btwidel.php?id=".$row["id"]."'>删除</a></li>";
    }
} else {
    echo "暂时无哩...";
}
$conn->close();
?><br>
</ol>
<br>
发表文章：<br><form id="editor-form" action='../blog/add.php' method='post'>
分类：<select name="lei" onchange="this.parentNode.nextSibling.value=this.value">
   <option value="life">生活</option>
   <option value="pro">编程</option>
</select>
   <br>
标签：<input type="text" name="tags" style='word-break:break-word;
padding:10px;
border-width :1px;
    border-top-style:solid;
    border-right-style:solid;
    border-left-style:solid;
    border-bottom-style:solid;
margin:2px;' rows='7'><br>
文章：<input type="text" name="title" style='word-break:break-word;
padding:10px;
border-width :1px;
    border-top-style:solid;
    border-right-style:solid;
    border-left-style:solid;
    border-bottom-style:solid;
margin:2px;' rows='7'><br>
<textarea name="contents" style='width:100%;word-break:break-word;
padding:10px;
border-width :1px;
    border-bottom-style:solid;
margin:2px;' rows='7' ></textarea><br>
<input type="submit" value="发表"><input type='reset' value="重写">
</form>
删除文章：<br>
<?php
  include '../blog/del.php'
?>
<br><br>
添加资料:<br>
<form action='../other/add.php' method='post'>
名称：<input type="text" name="mname"><br>
地址：<input type="text" name="msrc"><br>
<input type="submit" value="提交"><input type='reset' value="重置">
</form>
<br>
删除资料：<br>
<?php
  include '../other/del.php'
?>