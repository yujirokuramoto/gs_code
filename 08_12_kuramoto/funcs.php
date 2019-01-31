<?php
//共通に使う関数を記述

function h($a)
{
    return htmlspecialchars($a, ENT_QUOTES);
}

function abc_conn(){
    try {
        $pdo = new PDO('mysql:dbname=gs_abc;charset=utf8;host=localhost','root','');
        return $pdo;
    } catch (PDOException $e) {
        exit('DB-Connection-Error:'.$e->getMessage());
      }
}

function sqlerror($stmtp){
    $error = $stmtp->errorInfo();
    exit("ErrorSQL:".$error[2]);
  }


  function redirect($page){
    header("Location:".$page);
    exit;
  }
