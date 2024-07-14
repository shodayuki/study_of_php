<?php
  // arrayを使用して、平日の曜日の文字列だけの配列を作成し、表示するプログラムを作ろう
  $date = array("月曜日", "火曜日", "水曜日", "木曜日", "金曜日");

  foreach($date as $value){
    echo $value;
  }

  print '<br />';


  // 「"英語" => "日本語"」の形式として、色んな英単語の連想配列を作成し、表示するプログラムを作ろう
  $fruits = array("Apple" => "りんご", "Banana" => "バナナ", "Orange" => "オレンジ");

  foreach($fruits as $key => $val){
    echo $key.'を日本語にすると、'.$val;
    echo '<br>';
  }



  // 問題(1)と(2)で作った配列から、それぞれ好きな値を選んで、表示するプログラムを作ろう
  echo $date[0]."<br/>\n";
  echo $fruits["Apple"]."<br/>\n";




  // 問題(1)と(2)の配列の要素を数えて、表示するプログラムを作ろう
  $a = count($date);
  echo $a;

  print '<br />';

  $b = count($fruits);
  echo $b;

  print '<br />';



  // 多次元の連想配列を作り、表示するプログラムを作ろう
  // ただし、「リテラル」や「マジックナンバー」の意味をネットで調べ、リテラルやマジックナンバーを使わないこと。
  $company = [
    ['田中', 28, '男性'],
    ['鈴木', 32, '女性'],
    ['高橋', 24, '女性']
  ];

  foreach($company as $vals){
    echo $vals[0].'：'.$vals[1].'歳'.$vals[2];
    echo '<br>';
  }
?>