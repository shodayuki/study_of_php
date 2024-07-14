<!-- 第一引数と第二引数の値で、足し算、引き算、掛け算、割り算、剰余のそれぞれ計算を行って、結果を返す各関数作成し、呼び出そう。
ただし、関数は別のphpファイルに書き、呼び出す時は、includeで関数定義を読み込もう。また、各関数名は処理に合った名前を付ける事。
また、関数内の処理で、計算結果は、第一引数に上書き保存し、その第一引数を結果として返すようにしよう。 -->
<?php
  include ('php_kadai5_function.php');

  addition(10, 3);
  subtraction(10, 3);
  multiplication(10, 3);
  division(10, 2);
?>


<!-- 関数課題１の関数をコピーして、
を作り、呼び出そう。
作った参照渡しの各関数を呼び出す時は、常に第一引数を変数aに。第二引数を変数bにしよう。
その上で、事前に変数aとbには、好きな数値を入れて、その値がどうなるか予測しながら、実際の値をプログラムを書いて、検証しよう。 -->

<?php
  function add( &$a, &$b) {
    $a = $a + $b;
    echo $a."<br/>\n";
  }

  $a = 10;
  $b = 2;
  add($a, $b);

  function sub( &$a, &$b) {
    $a = $a - $b;
    echo $a."<br/>\n";
  }

  $a = 10;
  $b = 2;
  sub($a, $b);

  function multiplicate( &$a, &$b) {
    $a = $a * $b;
    echo $a."<br/>\n";
  }

  $a = 10;
  $b = 2;
  multiplicate($a, $b);

  function divide( &$a, &$b) {
    $a = $a / $b;
    echo $a."<br/>\n";
  }

  $a = 10;
  $b = 2;
  divide($a, $b);
?>