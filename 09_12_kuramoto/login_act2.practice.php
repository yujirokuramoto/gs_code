<?php
// 最初にSESSIONを開始！！
session_start();

// 0.外部ファイルを読み込み
include("funcs.php");
$lid = $_POST["lid"];
$lpw = $_POST["lpw"];

// 1.DB接続します
$pdo = abc_conn();

// 2.データ登録SQL作成
$sql = "SELECT * FROM gs_bm_user_table WHERE lid=:lid AND lpw=:lpw AND life_flg=0";
$stmtp = $pdo->prepare($sql);
$stmtp->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmtp->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$res = $stmtp->execute();
// 3.SQL実行時にエラーが有る場合
if($res==false){
    $error = $stmtp->errorInfo();
    exit("QueryError:".$error[2]);
}

// 4.抽出データ数を取得
$val = $stmtp->fetch();
// 5.該当レコードがあればSESSIONに値を代入（全角スペースを気をつける！）
if( $val["id"] !=""){
    $_SESSION["chk_ssid"] = session_id();
    $_SESSION["kanri_flg"] = $val['kanri_flg'];
    $_SESSION["name"] = $val['name'];
    header("Location: select.practice.php");
} else{
// logout処理を経由して全画面へ（「：」のあとは必ずスペース）
    header("Location: login.practice.php");
}
exit();
?>