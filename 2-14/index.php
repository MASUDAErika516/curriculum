<?php
$fruits=["apple","orange
","peach","cherry","lemon"];
echo count($fruits);
echo '<br>';
sort($fruits);
var_dump($fruits);
echo '<br>';
var_dump(in_array("apple",$fruits));
echo '<br>';
if(in_array("apple",$fruits)){
  echo "りんごがあるよ！";
}else{
  echo "りんごはないよ！";
}
echo '<br>';
$atstr = implode("@",$fruits);
var_dump($atstr);
echo '<br>';
$re_fruits=explode("@",$atstr);
var_dump($re_fruits);
?>
<!--
1. 要件定義(要求仕様書)=システムやソフトウェアの開発において、実装すべき機能や満たすべき性能などを明確にしていく作業
2. 単体テスト=単体機能のテスト
結合テスト=機能間、他システム間でのテスト
3. テスト仕様書(どのようなもの、項目)=システムやソフトウェアが、クライアントのヒアリングをもとに作り上げた要件定義書の通りに機能するかどうか、テストするポイントをまとめた資料のこと
-->