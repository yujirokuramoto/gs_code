<?php
session_start();

//1.　DB接続します
include "funcs.php";
$pdo = abc_conn();
sessChk();

//2.　データ登録SQL作成
$stmtp = $pdo->prepare("SELECT * FROM gs_bm_table");
$statusp = $stmtp->execute();

//3.　データ表示
$view="";
if($statusp==false){
    sqlError($stmtp);
}else{
    while($res = $stmtp ->fetch(PDO::FETCH_ASSOC)){
    $view .='<tr>';
    $view .='<td>';

    if($_SESSION["kanri_flg"]=="1"){
    $view .='<a href="detail.practice.php?id='.$res["id"].'" class="phph">';
    $view.=$res['book_name'].'</td><td>'.$res['book_url'].'</td><td>'.$res['comments'].'</td>';
    $view .='</a>';
}
    $view .='</td>';
    $view .=' ';
    $view .='<td>';

    if($_SESSION["kanri_flg"]=="1"){
    $view .='<a href="delete.practice.php?id='.$res["id"].'" class="phph">';
    $view .='[Delete]';
    $view .='</a>';
}else{
    $view.=$res['book_name'].'</td><td>'.$res['book_url'].'</td><td>'.$res['comments'].'</td>';
}  
    $view .='</td>';
    $view .='</tr>';
}
}
//
// 

?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>本棚</title>
<link rel="stylesheet" href="css/php.css">
<link rel="stylesheet" href="css/range.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<style>div{padding: 10px;font-size:13px;}</style>
</head>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <?php echo $_SESSION["name"]; ?>
       <a class="navbar-brand" href="logout.practice.php">Log out</a>
      </div>
    </div>
  </nav>
</header>;
<body id="main">
<!-- Head -->
<header>
<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="index.practice.php">[ Book Management ]</a>
</div>
</div>
</nav>
</header>
<!--/Head  -->

<!-- Main -->
<div>


<table border="3">
    <tr class="ph">
        <th>Book Name</th>
        <th>Book URL</th>
        <th>Comments</th>
        <th>   </th>
    </tr>
    <tr>
        <td><?php echo $view;?></td>
    </tr>
</table>
</div>
<!-- /Main -->
</body>
</html>