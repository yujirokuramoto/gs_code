<?php
include "funcs.php";
$pdo = abc_conn();

$stmtp = $pdo->prepare("SELECT * FROM gs_bm_user_table");
$statusp = $stmtp ->execute();

$view = "";
if ($statusp == false){
    sqlError($stmtp);
} else {
    while($result = $stmtp->fetch(PDO::FETCH_ASSOC)){
        $view .='<tr>';
        $view .='<a href="user.detail.php?id='.$result["id"].'">';
        $view .='<td>'.$result["lid"].'</td>'.",".$result["lpw"];
        $view .='</a>';
        $view .=' ';
        $view .='<td>';
        $view .='<a href="user.delete.php?id='.$result["id"].'">';
        $view .= '[delete]';
        $view .='</a>';
        $view .='<td>';
        $view .='</tr>';
    }
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>kanri</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="login.practice.php">log in</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
</div>
<!-- Main[End] -->

</body>
</html>
