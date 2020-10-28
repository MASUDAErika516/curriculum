<?php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$my_mail= $_POST['my_mail'];
?>
<p>私の名前は、<?php echo $my_name; ?></p>
<p>メールアドレスは、<?php echo $my_mail; ?></p>
<p>私のパスワードは、<?php echo $password; ?></p>

<!--
 仕様書=何を作るのかを説明した資料
 設計書=どうやって作るのかを説明した資料
 Git=プログラムのソースコードなどの変更履歴を記録
 マージツール=複数人で開発などを行うときにマージを行うためのツール
-->