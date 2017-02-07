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

  $id=$_GET['id'];
  $sql = 'SELECT sys FROM music where id="'.$id.'"';
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // 输出每行数据
      while($row = $result->fetch_assoc()) {
          echo '<pre>'.base64_decode($row['sys']).'</pre>';
                                            }
                              }
  $conn->close();
?>