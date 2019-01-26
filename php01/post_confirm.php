<?php
include("funcs.php");  //include＝外部ファイル読み込み
$name = $_POST["name"];
$mail = $_POST["mail"];

?>

<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?php echo h($name);?>
EMAIL：<?php echo h($mail);?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>