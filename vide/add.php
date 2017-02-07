<script>setTimeout("javascript:location.href='http://shuda.site/admin/havelogin.php'",1); </script>
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
  $lei=$_POST['lei'];
  $mname=$_POST['mname'];
  $msrc=$_POST['msrc'];
  $leis=$_POST['leis'];
  if ($lei==''){
      $lei=$leis;
  }
  
  
  echo "添加内容:".'<br>类别：'.$lei." <br> 名称: ". $mname. " <br>地址：" . $msrc;
  
  $sql = "INSERT INTO video (name,src,lei) VALUES ('$mname','$msrc','$lei')";

  if (mysqli_query($conn, $sql)) {
    echo "<br>新记录插入成功哩";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>