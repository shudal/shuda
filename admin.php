<?php
  session_start();//初始化session
  if ($_SESSION['name']=='admin')
{
 header("Location:http://shuda.site/admin/havelogin.php");
}
  include 'head.php';
?>
<html>
<head>
<title>管理</title></head>
<h1>管理登录哩</h1>
<form action="admin/login.php" method="post">
    <table>
        <tr><td>用户名:</td><td><input type="text" name="id" ></td></tr>
        <tr><td>密码:</td><td><input type="password" name="password" ></td></tr>
        <tr><td><input type="submit" value="登录"/></td>
        </tr>
    </table>
</form>
</head>
</html>
<?php
  include 'footer.php'
?>