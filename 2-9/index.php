<?php
$num=1;
while($num<=100){
  if($num%3==0){
    if($num%5==0){
      echo "FizzBuzz!!";
    }else{
      echo "Fizz!";
    }
  }elseif($num%5==0){
    echo "Buzz!";
  }else{
    echo $num;
  }
  echo '<br>';
  $num++;
}
/*
パフォーマンス=コンピュータなどの機器やソフトウェアの処理性能や実行速度、回線の伝送速度・容量などのこと
スロークエリ=実行に時間のかかるSQLのこと
クエリログ=サーバが実行した全ての SQL クエリを出力するログ。サーバに接続した時間、接続元ユーザ、実行したSQL を出力する。
*/
?>