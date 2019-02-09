<?php
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];
// $id = $_POST["id"];
include "funcs.php";
$pdo = abc_conn();


$sql ="UPDATE gs_bm_user_table SET name=:name,lid=:lid,lpw=:lpw WHERE id=:id";
$stmtp = $pdo->prepare($sql);
$stmtp->bindValue(':name', $name, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmtp->bindValue(':lid', $lid, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmtp->bindValue(':lpw', $lpw, PDO::PARAM_STR); //Integer（数値の場合 PDO::PARAM_INT)
$stmtp->bindValue(':id', $id, PDO::PARAM_INT); //Integer（数値の場合 PDO::PARAM_INT)
$statusp = $stmtp->execute();


if ($statusp == false) {
    sqlError($stmtp);
} else {
  
    header("Location: user.select.php");
    exit;
}

?>