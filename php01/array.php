<?php
//array = array("A","B","C","D");
//var_dump($array);

// $str = "PHP5_PHP6_PHP7_PHP5";
// $s = str_replace("PHP5","PHP5.5",$str);
// echo $s;

$s = "A,B,C,D,E,F";
$str = explode(",",$s);  //explodeは配列で使う
var_dump($str);


?>