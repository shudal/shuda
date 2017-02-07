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
<br>
<?php
  include 'bhead.php'
?>
<title>生活</title>
<style type='text/css'>
  #title {word-break:break-word;
padding:10px;
border-width :1px;
    border-top-style:solid;
    border-right-style:solid;
    border-left-style:solid;
margin:2px;
}
 #contents  {word-break:break-word;
padding:10px;
border-width :1px;
    border-bottom-style:solid;
margin:2px;
}
</style>
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
$sql ="SELECT title,contents,date,tags FROM blog where lei='life' order by date desc";
$result = $conn->query($sql);
function disp($stri){
    return htmlentities(base64_decode($stri));
}
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<br><center><p id="title">'.disp($row["title"]).'</p></center><i>'.$row[date].'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>'.disp($row['tags']).'</strong></i><pre><p id="contents">'.disp($row[contents]).'</pre></p><br><br></li>';
                                          }
    } else {
    echo "暂时无哩...";
}
$conn->close();

?>
<?php
  include '../footer.php'
?>