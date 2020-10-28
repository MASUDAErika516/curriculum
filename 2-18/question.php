<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
</html>
<?php
//POST送信で送られてきた名前を受け取って変数を作成
$my_name=$_POST['my_name'];
//①画像を参考に問題文の選択肢の配列を作成してください。
$q1=[80,22,20,21];
$q2=["PHP","Pyhton","JAVA","HTML"];
$q3=["join","select","insert","update"];
//② ①で作成した、配列から正解の選択肢の変数を作成してください
$A1=80;
$A2="HTML";
$A3="select";
?>
<p>お疲れ様です<?php echo $my_name; ?>さん</p>
<!--フォームの作成 通信はPOST通信で-->
<form action="answer.php" method="post">
<h2>①ネットワークのポート番号は何番？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($q1 as $value){ ?>
<input type="radio" name="a1" value="<?php echo $value; ?>"> <?php echo $value;
} ?>
<h2>②Webページを作成するための言語は？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($q2 as $value){ ?>
<input type="radio" name="a2" value="<?php echo $value; ?>"> <?php echo $value;
} ?>
<h2>③MySQLで情報を取得するためのコマンドは？</h2>
<!--③ 問題のradioボタンを「foreach」を使って作成する-->
<?php foreach($q3 as $value){ ?>
<input type="radio" name="a3" value="<?php echo $value; ?>"> <?php echo $value;
} ?>
<!--問題の正解の変数と名前の変数を[answer.php]に送る-->
<br>
<input type="hidden" name="A1" value="<?php echo $A1?>" />
<input type="hidden" name="A2" value="<?php echo $A2?>" />
<input type="hidden" name="A3" value="<?php echo $A3?>" />
<input type="hidden" name="my_name" value="<?php echo $my_name?>" />
<input type="submit" value="回答する"/>
</form>