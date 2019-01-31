<?php
//1.POSTデータ取得
$bname = $_POST["book_name"];
$burl = $_POST["book_url"];
$comm = $_POST["comments"];
$id = $_POST["id"];

//2.DB接続します
include("funcs.php");
$pdo = abc_conn();

//3.データ登録SQL作成
$sql ="UPDATE gs_bm_table SET book_name=:book_name, book_url=:book_url, comments=:comments WHERE id=:id";
$stmtp = $pdo->prepare($sql);
$stmtp->bindValue(':book_name', $bname, PDO::PARAM_STR);
$stmtp->bindValue(':book_url',  $burl,  PDO::PARAM_STR);
$stmtp->bindValue(':comments',  $comm,  PDO::PARAM_STR);
$stmtp->bindValue(':id', $id, PDO::PARAM_INT);
$statusp = $stmtp->execute();

//4.データ登録処理後
if($statusp==false){
sqlError($stmtp);
}else{
header("Location: select.practice.php");
exit;
}
?>

?>