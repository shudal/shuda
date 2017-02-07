<?php
  session_start();//初始化session
  if ($_SESSION['name']=='admin')
{
 header("Location:tr.php");
}
  include '../head.php';
?>
<style>
input
{
    word-break:break-word;
padding:10px;
border-width :1px;
    border-style:solid;
margin:2px;
}
</style>
<form action="" method="post">
    <table>
        <tr><td>用户名:</td><td><input type="text" name="id" ></td></tr>
        <tr><td>密码:</td><td><input type="password" name="password" ></td></tr>
        <tr><td><input type="submit" value="确定"></td>
        </tr>
    </table>
</form>
<?php
    $id = $_POST['id'];
    $password = $_POST['password'];
    $idd=md5($id);
    $pas=md5($password);
    if ($idd =='54c910cde00ac1048c786a110227762b' && $pas == "40bd6790aeee835bb134c075ebe1d620") {
    
        $_SESSION['name']='admin';
      echo "<script>location.href='tr.php';</script>";
                                                                                                  }
    
?>
<?php
  include '../footer.php'
?>