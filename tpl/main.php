<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $title;?></title>
  <link rel="stylesheet" type="text/css" href="/css/style.css">
  <script type="text/javascript" src="/js/jquery.js"></script>
  <script type="text/javascript" src="/js/common.js"></script>
</head>
<body>
<div class="main_errors_wrap" id="main_errors"></div>
<div class="header clear">
  <div class="container">
  	<ul>
      <li><a href="/" onclick="navGo(this, event);">Logo</a></li>
  	</ul>
    <ul class="fl_r right_nav_wrap">
      <?php
      if ($owner) {
      	echo '<li><a  href="/" onclick="logOut(\''.genHash('logOut').'\'); return false;" >Выйти</a></li>
              <li><a href="/?act=statistics" onclick="navGo(this, event);">Статистика</a></li>
              <li><a class="balance">Баланс:  <span id="balance">'.$owner['balance'].'</span></a></li>';
      }
      ?>
    </ul>
  </div>
</div>
<div class="container" id="content">
<?php 
 echo $content;
?></div>
<div class="footer">
  <div class="container">
    Copyright &copy; 2017
  </div>
</div>
</body>
</html>