<?php
$id = $_GET["id"];

include "funcs.php";
$pdo = abc_conn();

$sql = "DELETE FROM gs_bm_user_table WHERE id=:id";
$stmtp =$pdo->prepare($sql);
$stmtp->bindValue(':id',$id, PDO::PARAM_INT);
$statusp = $stmtp->execute();

if($statusp == false){
    sqlError($stmtp);
}else{
    header("Location: user.select.php");
    exit;
}

?>