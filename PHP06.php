<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function keisan($num){
     $result = 0;
    return $num * 2;
}
echo keisan(600);
echo "\n";
//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a,$b){
     $result = 0;
    return $a + $b;
}
echo add(12,4);
echo "\n";
//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してくださ
$arr = array(1,3,6,7,9);
//print_r($arr); 配列表示されるコメントアウト
//ar($arr);　　　例題１，２と形式合わせのためコメントアウト
function ar($arr){
  $ret=1;
  foreach ($arr as $value) {
    $ret *= $value;
  }
  echo ( $ret);
}
echo ar($arr);
echo "\n";
/*4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
//とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }
 return $max_number;*/
 
 function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
         if($a > $max_number){
             $max_number = $a;
            }
     }
     return $max_number;
     echo $max_number;
    }  
    $arr = array(1,3,6,7,9);
    echo max_array($arr);
    echo "\n";
   /* 5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

strip_tags
array_push
array_merge
time, mktime
date*/
//strip_tags
$aaa = "<p>タグを取り除く</p>";
$ddd = strip_tags($aaa);
echo 'タグ削除後:'.$ddd."\n";
//array_push
$rist = array("一番目の人", "二番目の人", "三番目の人");
print_r($rist);
array_push($rist, "四番目の人", "五番目の人");
print_r($rist);
//array_merge
$arr1 = array("あか", "きいろ", "みどり");
$arr2 = array("むらさき","ももいろ");
$N = array_merge($arr1, $arr2);
print_r($N);
//time, mktime
$time1 = time();
echo time()."\n";
$timestamp = mktime(0, 0, 0, 6, 30, 2022);
echo $timestamp."\n";
//date
date_default_timezone_set('Asia/Tokyo');
echo date("Y/m/d H:i:s")."\n";
?>