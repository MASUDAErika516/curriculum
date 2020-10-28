<?php
$testFile="text.txt";
$contents="こんにちは";

if(is_writable($testFile)){
  $fp=fopen($testFile,"w");
  fwrite($fp,$contents);
  fclose($fp);
  echo "finish writing";
}else{
  echo "not writable";
  exit;
}

$test_file="text2.txt";
if(is_readable($test_file)){
  $fp=fopen($test_file,"r");
  while($line=fgets($fp)){
    echo $line.'<br>';
  }
  fclose($fp);
}else{
  echo "not readable";
  exit;
}
?>
<!--
1. CakePHP=PHPのオープンソースのフレームワーク
2. LAMP=Linux,Apache,MySQL,Perl,PHP,Pythonのこと。オープンソースソフトウェア。
3. AWS=Amazon Web Servicesの略。Amazonが提供するクラウドコンピューティングサービスの総称。
-->