<!-- 複数条件のチェック
表示する度に、ランダムで、if elseif elseのどれかの処理が行われるプログラムを作ろう。
PHPに標準で備わっているrand()関数をネットで調べよう。 -->
<?php
  $rand = mt_rand(1, 5);

  if ($rand >= 4) {
      print '大吉';
  } else if ($rand >= 2) {
      print '中吉';
  } else {
    print '吉';
  }

  print '<br />';
?>



<!-- 三項演算子を使用して、表示する度にランダムで表示するメッセージが変わるプログラムを作ろう。 -->
<?php

  $number = rand(1,2);

  $result = ($number === 1) ?  '1が出ました！' : '2が出ました！';
  echo $result;


  print '<br />';
?>



<!-- 「1～4」の数値をランダムに変数へ保存し、その変数がどの値であるか、switch文でチェックし表示するプログラムを作ろう。 -->
<?php
switch(rand(1,4)){
	case 1:
		echo "コンテンツA";
		break;
	case 2:
		echo "コンテンツB";
		break;
	case 3:
		echo "コンテンツC";
		break;
  case 4:
    echo "コンテンツD";
    break;
}

print '<br />';
?>



<!-- 問題(3)で作ったプログラムをコピーし、break文を抜いたら、処理はどうなるか。
予測した後、コピーしたプログラムを修正して検証しよう。 -->

<?php
switch(rand(1,4)){
	case 1:
		echo "コンテンツA";
	case 2:
		echo "コンテンツB";
	case 3:
		echo "コンテンツC";
  case 4:
    echo "コンテンツD";
}

print '<br />';
?>



<!-- 問題(3)で作ったプログラムをコピーし、「1～6」の数値をランダムに変数へ保存するよう変更。
default文を使用して「1～4」以外の数値の時は、エラーを示すような文章を表示するプログラムを作ろう。 -->

<?php
switch(rand(1,6)){
	case 1:
		echo "コンテンツA";
		break;
	case 2:
		echo "コンテンツB";
		break;
	case 3:
		echo "コンテンツC";
		break;
  case 4:
    echo "コンテンツD";
    break;
  default:
    print 'エラーです';
}

print '<br />';
?>


<!-- 問題(3)で作ったプログラムをコピーし、endswitch文を使用した、switch文に修正しよう。 -->
<?php switch (rand(1,4)):
	case "1": ?>
		<p>コンテンツA</p><br />
		<?php break; ?>
	<?php
	case "2": ?>
		<p>コンテンツB</p><br />
		<?php break; ?>
  case "2": ?>
		<p>コンテンツC</p><br />
		<?php break; ?>
	<?php
	case "4": ?>
		<p>コンテンツD</p><br />
    <?php break; ?>
<?php endswitch; ?>


<!-- whileループで、10回ループ処理をし、ループ数を数えて表示するプログラムを作ろう。 -->
<?php
$count = 1;
  while($count<=10){
    echo $count."回目"."<br>";
    $count++;
  }

  print '<br />';
?>


<!-- do～whileで10回ループ処理をし、ループ数を数えて表示するプログラムを作ろう。 -->
<?php
$num = 1;

do{
  echo $num."回目"."<br />";
  $num ++;
}while ($num <= 10);
?>


<!-- 下記のソースにbreak文を加えて「ゼロで割り算する事」を避けるプログラムを作ろう。
for ($counter = -3; $counter < 10; $counter++) {
  echo 100 / $counter;
} -->
<?php
  for ($counter = -3; $counter < 10; $counter++) {
    if ($counter == 0){
      break;
    }
    echo 100 / $counter."<br />";
  }
?>

<!-- 問題(9)で作ったプログラムをコピーし、break文の代わりにcontinue文を使用するとどうなるか。
予測した後、プログラムを書いて検証しよう。 -->
<?php
  for ($counter = -3; $counter < 10; $counter++) {
    if ($counter == 0){
      continue;
    }
    echo 100 / $counter."<br />";
  }
?>