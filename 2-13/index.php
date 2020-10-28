<?php 
$x=10.3;
echo ceil($x);
echo '<br>';
echo floor($x);
echo '<br>';
echo round($x);
echo '<br>';

echo pi();
echo '<br>';
function circleLen($r){
  $circleLen= 2*$r*pi();
  echo $circleLen;
}
circleLen(5);
echo '<br>';
echo mt_rand(1,50);
echo '<br>';

$str="letsengineer";
echo strlen($str);
echo '<br>';
echo strpos($str,"n");
echo '<br>';
echo substr($str,-5,3);
echo '<br>';
echo str_replace("lets","LETS",$str);
echo '<br>';
$month=10;
$day=28;
$week="水";
printf("今日は%02d月%02d日%s曜日です",$month,$day,$week);
echo '<br>';
$today=sprintf("今日は%02d月%02d日%s曜日です",$month,$day,$week);
echo $today;
?>
