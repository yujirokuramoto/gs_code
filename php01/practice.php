< html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="write.practice.php" method="post">
    お名前:　<input type="text" name="name">
    EMAIL: <input type="text" name="mail">
    <p>１．好きな食べ物は？</p>
        <input type="checkbox" name="answer1" value="0">米
        <input type="checkbox" name="answer1" value="1">肉
        <input type="checkbox" name="answer1" value="2">野菜
        <input type="checkbox" name="answer1" value="3">デザート<br>
    <p>２．好きなスポーツは？</p>
        <input type="checkbox" name="answer2" value="0">球技
        <input type="checkbox" name="answer2" value="1">陸上
        <input type="checkbox" name="answer2" value="2">水泳
        <input type="checkbox" name="answer2" value="3">格闘技<br>
    <p>３．好きな海外は？</p>
        <input type="checkbox" name="answer3" value="0">北米・南米
        <input type="checkbox" name="answer3" value="1">欧州
        <input type="checkbox" name="answer3" value="2"">アジア
        <input type="checkbox" name="answer3" value="3">アフリカ<br><br>
    <input type="submit" value="送信"><br><br>
</form>

<ul>
    <li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>