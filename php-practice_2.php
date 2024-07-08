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

/* [ask]
20という数値はどこから出てきましたか？
*/

/* 解答
4の倍数かつ5の倍数の最小公倍数は20なので、20を使用しました。
*/

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

/*
別解法を考えたれていてとても良いですね！
ちなみにパターン①と②どちらの方がいいと感じていますか？
*/

/* 解答
パターン②の方がいいかと思います。
理由としては、外で変数を定義した方がループ内でのカウンター管理が明確化すると思うからです。
また、$keyを加算するより、変数を使った方がコードの意図が分かりやすく可読性も高いと考えます。
*/


// 問題3
$ageList = [25, 30, 18];
foreach ($ageList as $key => $value) {
  $personalInfos[$key]['age'] = $ageList[$key];
}
var_dump($personalInfos);

/* [ask]
$kyeや$valueからなんの値が代入されているか想像することできますか？
*/

/* 解答
想像できません。
上記の場合、ageつまり年齢に関係する名前を設定する方が適切だと思います。
$key→$age
$value→personalAge
*/

/* [ask]
$keyに格納されている値ってなんでしたっけ
*/

/* 解答
$keyに格納されているのはインデックス番号です。
その場合だと、
$key→ageIndex または ageKey などの方が表現としては適切でしょうか…？
*/

// Q3 オブジェクト-1
class Student
{
  public $studentId;
  public $studentName;

  public function __construct($id, $name)
  {
    $this->studentId = $id;
    $this->studentName = $name;
  }

  public function attend()
  {
    echo '授業に出席しました。';
  }
}

$arai = new Student(123, '荒井');
echo '学籍番号' . $arai->studentId . '番の生徒は' . $arai->studentName . 'です。';

/* [ask]
class Studentが定義される前に実行した場合どうなると思いますか？
*/

/* 解答
class Studentが定義されていなければ、そもそもインスタンス化するclassがないため、エラーになると思います。
すみません。質問の意図としましては問題文の記載がないため、記載した方がいいということでしょうか…？
こちらの記載がないのは単なる記載漏れのため、念のため修正として問題も追加で記載いたしました。
*/

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

/* [ask]
1行で書き直すことできますか？
*/

/* 解答
できます。以下に1行で書き直したものを記載いたします。
echo $oldTime->diff($nowTime)->format('あの日から%a日経過しました。');
*/

/* [ask]
このようにメソッドが連なっているものをなんと呼ぶでしょうか？
どういう条件だったらメソッドをつなげることができますか？
*/

/* 解答
メソッドを連続して呼び出す方法をメソッドチェーンと言います。
各メソッドが自分のクラスのオブジェクトを返り値として持っている場合です。
*/

?>