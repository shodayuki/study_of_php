<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $seireki=$_POST['seireki'];

  $wareki=gengo($seireki);
  print $wareki;

  function gengo($seireki)
  {
    if(1868 <= $seireki && $seireki <= 1911)
    {
      $gengo = '明治';
    }

    if(1912 <= $seireki && $seireki <= 1925)
    {
      $gengo = '大正';
    }

    if(1926 <= $seireki && $seireki <= 1988)
    {
      $gengo = '昭和';
    }

    if(1989 <= $seireki && $seireki <= 2019)
    {
      $gengo = '平成';
    }

    if(2020 <= $seireki)
    {
      $gengo = '令和';
    }

    return ($gengo);
  }
?>
</body>
</html>