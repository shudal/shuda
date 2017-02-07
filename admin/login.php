<?php
  session_start();
  if ($_SESSION['name']=='admin')
{
 header("Location:havelogin.php");
}
  include '../head.php';
?>
<title>登录</title>
<?php
    
    $id = $_POST['id'];
    $password = $_POST['password'];
    $idd=md5($id);
    $pas=md5($password);
    if ($idd =='54c910cde00ac1048c786a110227762b' && $pas == "40bd6790aeee835bb134c075ebe1d620") {
        $_SESSION['name']='admin';
        echo '登录成功...系统将重定向...';
        $scri='<script>setTimeout("javascript:location.href='."'".'http://shuda.site/admin/havelogin.php'."'".'"'.",1); </script>";
        echo $scri;
                                                                                                  }
    else{
        echo '不对...' ;
            }
                                                              
?>
<?php
  include '../footer.php'
?>