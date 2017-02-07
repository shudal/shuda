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
  $singer=$_POST['singer'];
  $singers=$_POST['singers'];
  $mname=$_POST['mname'];
  $msrc=$_POST['msrc'];
  $msys=$_POST['msys'];
  function addt($stri){
    return base64_encode($stri);
}
  $msys=addt($msys);
  
  
  if ($singer==''){
      $singer=$singers;
  }
  
  echo "添加内容:"."<br> 歌手: ". $singer. " <br> 名称: ". $mname. " <br>地址：" . $msrc;
  
  $sql = "INSERT INTO music (name,singer, src,sys) VALUES ('$mname','$singer', '$msrc','$msys')";

  if (mysqli_query($conn, $sql)) {
    echo "<br>新记录插入成功哩";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>