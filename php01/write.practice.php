<html>
<head>
<meta charset="utf-8">
<title>File書き込み</title>
</head>
<body>
記載OK！<br>

<?php
$name = $_POST["name"];
$mail = $_POST["mail"];
$answer1 = $_POST["answer1"];
$answer2 = $_POST["answer2"];
$answer3 = $_POST["answer3"];

//文字作成
$str = date("Y-m-d H:i:s").",".$name.",".$mail.",".$answer1.",".$answer2.",".$answer3;

//配列
// $str_base = explode("," , $str);
// var_dump($str_base);


//File書き込み
$file = fopen("data/data.practice.txt","a");//ファイル読み込み
fwrite($file, $str."\r\n");//"."は"+"と同じ意味。"\n"は改行コード
fclose($file);

?>


<ul>
<li><a href="#">戻る</a></li>
</ul>
</body>
</html>