<?php
$n=0;
$sum=0;
while($sum<40){
  $x=mt_rand(1,6);
  $sum +=$x;
  $n++;
  echo $n."回目=".$x."  ".$sum.'<br>';
}
echo "合計".$n."回目でゴールしました".'<br>';
?>


<?php
$hour=date("H",time());
echo "今".$hour."時台です".'<br>';
if($hour>=17 || $hour<=3){
  echo "こんばんは";
}elseif($hour<=10){
  echo "おはようございます";
}else{
  echo "こんにちは";
}  
?>