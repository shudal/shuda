<?php
  include '../head.php';
?>
<style>
input[type="button"],input[type="reset"],.sel
{
    width:5%;height:6%;word-break:break-word;
padding:10px;
border-width :1px;
    border-style:solid;
margin:2px;
}
</style>
<html>
<input type="button" value="上一张" onclick="previous();">
<input type="button" value="下一张" onclick="next();">
<input type="button" value="幻灯片" onclick="pp();">
<input type="button" value="暂停" onclick="pau()"><br><br>
<br>
<strong>总张数:&nbsp;&nbsp;</strong>
<a href='#' id='tn' class='sel'>1781</a>
<br>

<strong>源:</strong><br><br>
<a href='#' onclick='huyu(1);' class='sel'>t</a>
<a href='#' onclick='huyu(2);' class='sel'>t2</a>
<a href='#' onclick='huyu(3);' class='sel'>t3</a>
<a href='#' onclick='huyu(4);' class='sel'>t4</a>
<a href='#' onclick='huyu(5);' class='sel'>t5</a>
<a href='#' onclick='huyu(6);' class='sel'>t6</a>
<a href='#' onclick='huyu(7);' class='sel'>t7</a>
<br id="bbbr"><br>
切换到第
<input id="texts" type="text" value="1" size="5" class='sel'>
张
<input type="button" value="确定" onclick="change();">
<br>
<title>Picture</title>
<?php
  include 'da.html'
?>
</head>
<body id="bbody" bgcolor="">
<br>
<font color="red">
<h1 align="center">My Pictures!</h1>
</font>
<center>
<br>
<img id="imgs" border="3" src="http://oka65hkln.bkt.clouddn.com/1.jpg" >


     

 
</form>
</body>
</html>
<?php
  include '../footer.php'
?>