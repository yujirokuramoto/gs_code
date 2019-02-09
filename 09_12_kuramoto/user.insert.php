<?php
//1.POSTデータ取得
$name = $_POST["name"];
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

//2.DB接続します
include("funcs.php");
$pdo = abc_conn();

//3.データ登録SQL作成
$stmtp = $pdo->prepare("INSERT INTO gs_bm_user_table(name,lid,lpw)VALUES(:name,:lid,:lpw)");
$stmtp->bindValue(':name', $name, PDO::PARAM_STR);
$stmtp->bindValue(':url',  $lpw,  PDO::PARAM_STR);
$stmtp->bindValue(':lpw',  $lid,  PDO::PARAM_STR);
$statusp = $stmtp->execute();

//4.データ登録処理後
if($statusp==false){
sqlError($stmtp);
}else{
//5.index.phpへリダイレクト
$page = "user.index.php";
redirect("user.index.php");
}
?>