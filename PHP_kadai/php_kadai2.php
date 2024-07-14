<!-- 以下の文の値を予測して、その後、プログラムを書き、検証しよう。
2 + 4 - 5
4 - 5 + 2

4 * 5 / 2
5 / 2 * 4 -->
<?php
  echo 2 + 4 - 5;
  print '<br />';

  echo 4 - 5 + 2;
  print '<br />';

  echo 4 * 5 / 2;
  print '<br />';

  echo 5 / 2 * 4;
  print '<br />';
?>

<!-- 以下の文の値を予測して、その後、プログラムを書き、検証しよう。
2 * 3 + 4 + 1;
2 * (3 + 4 + 1); -->
<?php
  echo 2 * 3 + 4 + 1;
  print '<br />';

  echo 2 * (3 + 4 + 1);
  print '<br />';
?>

<!-- else文とif文について、以下のソースを見て、以下の質問に答えよ。
①trueが実行される条件を、画面上に表示しよう。
②falseが実行されるには、どのような処理が追加で必要か、解説を画面上に表示しよう。
if ($username == "Admin") {
  echo ("Welcome to the admin page.");
} else {
  echo ("Welcome to the user page.");
}
スクリーン リーダーのサポートを有効にするには、⌘+option+Z を押します。キーボード ショートカットの詳細については、⌘スラッシュ を押します。 -->
<?php
  $username = "Admin";

  if ($username == "Admin") {
    echo ("Welcome to the admin page.");
    print '<br />';
    echo ("usernameの値がAdmin以外であればfalseが実行される。");
    print '<br />';
  } else {
    echo ("Welcome to the user page.");
  }
?>

<!-- 適当な配列を作り、複数の値を保存する事。また、保存した値を、ループ処理で順番に表示するプログラムを作ろう。 -->
<?php
  $array = ["Orange", "Apple", "Peach", "Banana"];
  foreach($array as $value) {
    print($value);
    print("<br/>");
  }
?>


<!-- 問題(4)で作った配列の内容を、sort関数でアルファベット順に並べて、ループ処理で順番に表示するプログラムを作ろう。 -->
<?php
  $array = ["Orange", "Banana", "Apple", "Peach"];
  sort($array);
  foreach($array as $value) {
    print($value);
    print("<br/>");
  }
?>


<!-- 適当な多次元配列を作成し、foreachで内容を順番に表示するプログラムと、whileで内容を順番に表示するプログラムを作ろう。
ただし、「マジックナンバー」の意味をネットで調べ、マジックナンバーを使わないこと。 -->
<?php
  $cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );

  foreach ($cars as $key1 => $value1) {
    foreach ($value1 as $key2 => $value2) {
      echo $value2."<br>";
  }
}
?>

<?php
  $cars = array
  (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );

  $row = 0;

  while ($row < 4){
    $col = 0;

    while ($col < 3){
      echo $cars[$row][$col]."<br />";
      $col += 1;
    }
    $row += 1;
  }
?>