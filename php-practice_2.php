<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
  if ($i % 20 === 0) {
    echo 'tic-tac' . "\n";
  } elseif ($i % 4 === 0) {
    echo 'tic' . "\n";
  } elseif ($i % 5 === 0) {
    echo 'tac' . "\n";
  } else {
    echo $i . "\n";
  }
}

// Q2 多次元連想配列
$personalInfos = [
  [
    'name' => 'Aさん',
    'mail' => 'aaa@mail.com',
    'tel' => '09011112222'
  ],
  [
    'name' => 'Bさん',
    'mail' => 'bbb@mail.com',
    'tel' => '08033334444'
  ],
  [
    'name' => 'Cさん',
    'mail' => 'ccc@mail.com',
    'tel' => '09055556666'
  ],
];

// 問題1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

// 問題2
// パターン①
foreach ($personalInfos as $key => $user) {
  echo ++$key . '番目の' . $user['name'] . 'の' . 'メールアドレスは' . $user['mail'] . 'で、電話番号は' . $user['tel'] . 'です。' . "\n";
}
// パターン②
$index = 1;
foreach ($personalInfos as $user) {
  echo $index . '番目の' . $user['name'] . 'のメールアドレスは' . $user['mail'] . 'で、電話番号は' . $user['tel'] . 'です。' . "\n";
  $index++;
}

// 問題3
$ageList = [25, 30, 18];
foreach ($ageList as $key => $value) {
  $personalInfos[$key]['age'] = $ageList[$key];
}
var_dump($personalInfos);

// Q3 オブジェクト-1
$arai = new Student(123, '荒井');
echo '学籍番号' . $arai->studentId . '番の生徒は' . $arai->studentName . 'です。';

// Q4 オブジェクト-2
class Student
{
  public $studentId;
  public $studentName;

  public function __construct($id, $name)
  {
    $this->studentId = $id;
    $this->studentName = $name;
  }

  public function attend($lesson)
  {
    echo $this->studentName . 'は' . $lesson . 'の授業に参加しました。' . '学籍番号：' . $this->studentId;
  }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
// 問題1
$date = new DateTime('now');
$date->modify('-1 month');

echo $date->format('Y-m-d');

// 問題2
$oldTime = new DateTime('1992-04-25');
$nowTime = new DateTime('now');

$diff = $oldTime->diff($nowTime);
echo $diff->format('あの日から%a日経過しました。');

?>