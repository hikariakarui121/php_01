<?php

// 変数にする
$choice1 = $_POST["choice1"];
$choice2 = $_POST["choice2"];
$choice3 = $_POST["choice3"];


// ランダム数を決める。
$n = rand(0,2);

// 配列をつくる
$act  =array(
"<img src='image/1.jpg' width='400px'>",
"<img src='image/2.jpg' width='400px'>",
"<img src='image/3.jpg' width='400px'>");


// ボタンを押したら、グーかチョキかパーが出るようにする。
// $act[$n] 配列のn番目が出力されるようにする。
if(isset($_POST[$choice1])) {
  var_dump($act[$n]); 
} else if(isset($_POST[$choice2])) {
  var_dump($act[$n]);
} else {
  var_dump($act[$n]);
}


?>
