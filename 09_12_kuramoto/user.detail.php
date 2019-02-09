<?php
$id =$_GET["id"];

include"funcs.php";
$pdo = abc_conn();

$stmtp = $pdo->prepare("SELECT * FROM gs_bm_user_table WHERE id=:id");
$stmtp->bindValue(":id", $id, PDO::PARAM_INT);
$statusp = $stmtp->execute();

$view = "";
if ($statusp == false) {
    sqlError($stmtp);
} else {
    $row = $stmtp->fetch();
  }

?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="user.select.php">List</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="user.update.php">
  <div class="jumbotron">
   <fieldset>
    <legend>renewal</legend>
     <label>Name：<input type="text" name="name" value="<?php echo $row["name"]; ?>"></label><br>
     <label>lid：<input type="text" name="lid"value="<?php echo $row["lid"]; ?>"></label><br>
     <label>lid：<input type="password" name="lpw"value="<?php echo $row["lpw"]; ?>"></label><br>
     <input type="submit" value="submit">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->


</body>
</html>
