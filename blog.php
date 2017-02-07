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
<?php
  include 'blog/bhead.php'
?>
<title>博客首页</title>
<p style="word-break:break-all" >
  &nbsp;&nbsp;你好啊.<br>
  &nbsp;&nbsp;想看常用语法？想写写文章？想写说说？想下资料？这里都可以。目的便是--有干货，从而可以顺便放两个广告来数钱，像<a href='http://www.liaoxuefeng.com/'>廖雪峰</a>一样，为什么非得要赚钱呢？因为这好cool！。这是为自己、为大家！
</p>
<?php
  include 'footer.php'
?>