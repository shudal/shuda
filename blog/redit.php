<!DOCTYPE html>
<style  type="text/css">
  #content a {
       display:block;
       width:14.2%;height:60px;
       line-height:60px;
       background-color:#459df5;
       float:left;
       text-align:center;
       font-size:16px;
       color:white;
       text-decoration:none;}
  #content a:hover{
       background-color:rgba(36,97,158,0.9);
       color:#ffffff;
       font-size:16px;
       line-height:50px
  }
  body {
         margin:1;
         font-family:'微软雅黑','Times New Roman', Times, serif;
       }
  a {text-decoration:none;}
</style>
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
<body>
<div id='content'>
  <a href="http://shuda.site/">首页</a>
  <a href="http://shuda.site/blog.php">博客</a>
  <a href="http://shuda.site/pic.php">Picture</a>
  <a href="http://shuda.site/mus.php">Music</a>
  <a href="http://shuda.site/vid.php">Video</a>
  <a href="http://shuda.site/beiwang.php">记忆录</a>
  <a href="http://shuda.site/other.php">其他</a>
</div>
</body>
<br>
<?php
  include 'bhead.php'
?>
<style type='text/css'>
  #title {word-break:break-word;
padding:10px;
border-width :1px;
    border-style:solid;
margin:2px;
}
 #contents  {width:90%;word-break:break-word;
padding:10px;
border-width :1px;
    border-bottom-style:solid;
margin:2px;
}
</style>
<title>重新编写</title>
<form action='update.php' method='post'>
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
$id=$_GET['id'];
$sql = "SELECT title,contents,date,tags FROM blog where id='$id'";
$result = $conn->query($sql);
function disp($stri){
    return htmlentities(base64_decode($stri));
}
if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
         echo '<br><center><input name="title" id="title" value="'.disp($row["title"]).'"></center><i>'.$row[date].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><br><input name="tags" value="'.disp($row['tags']).'"></strong></i><pre><textarea rows="21" name="contents" id="contents" >'.disp($row[contents]).' </textarea></pre></p><br><br></li>';
    }
    echo 'id:<input value="'.$id.'" name="id"><br><input type="submit" value="确定"><input type="reset" value="重写">';
} else {
    echo "暂时无哩...";
}
$conn->close();

?>