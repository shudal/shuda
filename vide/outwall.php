<?php
  include '../head.php';
?><center>
<video id='vvdios' controls="controls" loop="loop" src='http://oka0n5b6f.bkt.clouddn.com/The%20Gettysburg%20Address%20-%20Abraham%20Lincoln%201863.mp4'></video></center>
<style>
 #me li{
  padding:10px;
border-width :1px;
border-style:solid;
margin:2px;
float:left;
  }
</style>
<title>Out Wall</title>
<ol id='me'>
<?php
  $servername = "localhost";
  $username = "shudasit_shuda";
  $password = "ma18223";
  $dbname = "shudasit_shuda";

  // 创建连接
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  // 检测连接
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());}
  $lei='Out Wall';
  $sql = "SELECT name,src FROM video where lei=".'"'.$lei.'"';
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // 输出每行数据
      while($row = $result->fetch_assoc()) {
          echo ' <li> <a href="javascript:void(0)" onclick='.'da("'.$row['src'] .'")'." >" . $row['name'].'</a></li><br><br><br>';
                                            }  
                              }
// $conn->close();
?>
</ol>
<script>
  function da(qf){
    var qq=qf;
    var cha=document.getElementById("vvdios");
    cha.setAttribute("src",qq);
  }
  
  
</script> 
<?php
  include '../footer.php'
?>