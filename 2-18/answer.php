<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
</html>
<?php 
//[question.php]から送られてきた名前の変数、選択した回答、問題の答えの変数を作成
$my_name=$_POST['my_name'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$A1=$_POST['A1'];
$A2=$_POST['A2'];
$A3=$_POST['A3'];
//選択した回答と正解が一致していれば「正解！」、一致していなければ「残念・・・」と出力される処理を組んだ関数を作成する
function judge($a,$A){
  if($a==$A){
    echo "正解!";
  }else{
    echo "残念・・・";
  }
}
?>
<p><?php echo $my_name; ?>さんの結果は・・・？</p>
<p>①の答え</p>
<?php judge($a1,$A1); ?>
<p>②の答え</p>
<?php judge($a2,$A2); ?>
<p>③の答え</p>
<?php judge($a3,$A3); ?>