<?php
$id = $_GET["id"];

include "funcs.php";
$pdo = abc_conn();

//２．データ登録SQL作成
$stmtp = $pdo->prepare("SELECT * FROM gs_bm_table WHERE id=:id");
$stmtp->bindValue(":id", $id, PDO::PARAM_INT);
$statusp = $stmtp->execute();

//３．データ表示
$view = "";
if($statusp == false){
    sqlError($stmtp);
}else{
    $row = $stmtp->fetch();
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.practice.php">データ一覧</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.practice.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Update!</legend>
     <label>Book Name：<input type="text" name="book_name" value="<?php echo $row["book_name"]; ?>"></label><br>
     <label>Book URL : <input type="text" name="book_url" value="<?php echo $row["book_url"]; ?>"></label><br>
     <label>Comments　:<textArea name="comments" rows="4" cols="40"><?php echo $row["comments"]; ?></textArea></label><br>     <input type="hidden" name="id" value="<?php echo $id; ?>">
     <input type="submit" value="Submit!">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>