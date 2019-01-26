<html>
<head>
<meta charset="utf-8">
<title>データ表示</title>
</head>
<body>
アンケート結果<br>
<?php

//File読み込み
$filename = "data/data.practice.txt";
$fp = fopen($filename,"r");//ファイル読み込み
while(!feof($fp)){
$txt = fgets($fp);
echo $txt."<br>";
}

fclose($fp);



// fwrite($file, $str."\r\n");//"."は"+"と同じ意味。"\n"は改行コード
// fclose($file);
?>


<ul>
<li><a href="#">戻る</a></li>
</ul>
</body>
</html>