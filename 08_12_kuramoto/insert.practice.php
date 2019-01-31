<?php
//1.POSTデータ取得
$bname = $_POST["book_name"];
$burl = $_POST["book_url"];
$comm = $_POST["comments"];

//2.DB接続します
include("funcs.php");
$pdo = abc_conn();

//3.データ登録SQL作成
$stmtp = $pdo->prepare("INSERT INTO gs_bm_table(book_name,book_url,comments,indate)VALUES(:book_name,:book_url,:comments,sysdate())");
$stmtp->bindValue(':book_name', $bname, PDO::PARAM_STR);
$stmtp->bindValue(':book_url',  $burl,  PDO::PARAM_STR);
$stmtp->bindValue(':comments',  $comm,  PDO::PARAM_STR);
$statusp = $stmtp->execute();

//4.データ登録処理後
if($statusp==false){
sqlError($stmtp);
}else{
//5.index.phpへリダイレクト
$page = "index.practice.php";
redirect("index.practice.php");
}
?>