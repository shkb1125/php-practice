<?php
// Q1 変数と文字列
$name = '菅野';
echo '私の名前は「' . $name . '」です。';

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
$num /= 2;
echo $num;

// Q3 日付操作
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'windows';
if ($device === 'windows' || $device === 'mac') {
  if ($device === 'windows') {
    echo '使用OSは、windowsです。';
  } else {
    echo '使用OSは、macです。';
  }
} else {
  echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 18;
$message = ($age >= 18) ? '成人です。' : '未成年です。';
echo $message;

// Q6 配列
$prefecture = ['茨城県', '栃木県', '群馬県', '埼玉県', '千葉県', '東京都', '神奈川県'];
echo $prefecture[2] . 'と' . $prefecture[3] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$areas = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

foreach ($areas as $area) {
  echo $area . "\n";
}

// Q8 連想配列-2
foreach ($areas as $prefecture => $capital) {
  if ($prefecture === '埼玉県') {
    echo $prefecture . 'の県庁所在地は、' . $capital . 'です';
  }
}

// Q9 連想配列-3
$areas['宮城県'] = '仙台市';
$areas['愛知県'] = '名古屋市';

$kanto_prefectures = ['東京都', '神奈川県', '千葉県', '埼玉県', '栃木県', '群馬県', '茨城県'];

foreach ($areas as $prefecture => $capital) {
  if (in_array($prefecture, $kanto_prefectures)) {
    echo $prefecture . 'の県庁所在地は、' . $capital . 'です。' . "\n";
  } else {
    echo $prefecture . 'は関東地方ではありません。' . "\n";
  }
}

// Q10 関数-1
function hello($name)
{
  echo $name . 'さん、こんにちは。' . "\n";
}
hello('菅野');
hello('辻');

// Q11 関数-2
function calcTaxInPrice($price)
{
  $taxInPrice = $price * 1.1;
  return $taxInPrice;
}
$price = 1000;
echo $price . '円の商品の税込価格は' . calcTaxInPrice($price) . '円です。';

// Q12 関数とif文
function distinguishNum($num)
{
  if ($num % 2 === 0) {
    echo $num . 'は偶数です。' . "\n";
  } else {
    echo $num . 'は奇数です。' . "\n";
  }
}

$num = 11;
distinguishNum($num);
$num = 24;
distinguishNum($num);

// Q13 関数とswitch文
function evaluateGrade($result)
{
  switch ($result) {
    case 'A':
    case 'B':
      echo '合格です。' . "\n";
      break;
    case 'C':
      echo '合格ですが追加課題があります。' . "\n";
      break;
    case 'D':
      echo '不合格です。' . "\n";
      break;
    default:
      echo '判定不明です。講師に問い合わせてください。' . "\n";
      break;
  }
}

$result = 'A';
evaluateGrade($result);
$result = 'E';
evaluateGrade($result);

?>