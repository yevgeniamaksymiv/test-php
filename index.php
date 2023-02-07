<?php
// 1
$a = 3;
echo $a . '</br>';

// 2
$a = 10;
$b = 2;
echo $a + $b . '</br>';
echo $a - $b . '</br>';
echo $a * $b . '</br>';
echo $a / $b . '</br>';

// 3
$c = 15;
$d = 2;
$result = $c + $d;
echo $result . '</br>';

// 4
$a = 10;
$b = 2;
$c = 5;
echo $a + $b + $c . '</br>';

// 5
$a = 17;
$b = 10;
$c = $a - $b;
$d = 7;
$result = $c + $d;
echo $result . '</br>';

// 6
$text = 'Привіт, Світ!';
echo $text . '</br>';

// 7
$text1 = 'Привіт, ';
$text2 = 'Світ!';
echo $text1 . $text2 . '</br>';

// 8
$name = 'Євгенія';
echo 'Привіт, ' . $name . '</br>';

// 9
$age = 41;
echo 'Мені ' . $age . ' рік' . '</br>';

// 10
$text = 'abcde';
echo $text[0] . '</br>';
echo $text[2] . '</br>';
echo $text[4] . '</br>';

// 11
$text = 'abcde';
$text[0] = '!';
echo $text . '</br>';

// 12
$num = '12345';
echo array_sum(str_split($num)) . '</br>';

// 13
$hour = 60 * 60;
$day = $hour * 24;
$month = $day * 30;
echo $hour . '</br>';
echo $day . '</br>';
echo $month . '</br>';

// 14
$hour = 'H';
$min = 'i';
$sec = 's';
echo date("$hour:$min:$sec") . '</br>';

// 15
function numToSquare($num)
{
    echo pow($num, 2) . '</br>';
}
numToSquare(15);

// 16
$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
echo $var . '</br>';

// 17
$text = 'Я';
$text .= ' хочу';
$text .= ' знати';
$text .= ' PHP!';
echo $text . '</br>';

// 18
$var = 10;
$var++;
$var++;
$var--;
echo $var . '</br>';

// 19
$var = 10;
$var += 7;
$var++;
$var--;
$var += 12;
$var *= 7;
$var -= 15;
echo $var . '</br>';

// 20
$arr = ['a', 'b', 'c'];
var_dump($arr);
echo '</br>';

// 21
foreach ($arr as $el) {
    echo $el . '</br>';
}

// 22
$arr = ['a', 'b', 'c', 'd'];
echo "$arr[0]+$arr[1], $arr[2]+$arr[3]" . '</br>';

// 23
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result . '</br>';

// 24
$arrPush[] = 1;
$arrPush[] = 2;
$arrPush[] = 3;
$arrPush[] = 4;
$arrPush[] = 5;
var_dump($arrPush);
echo '</br>';

// 25
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo $arr['c'] . '</br>';

// 26
$arr = ['a' => 1, 'b' => 2, 'c' => 3];
echo array_sum($arr) . '</br>';

// 27
$arr = ['Коля' => '1000$', 'Вася' => '500$', 'Петя' => '200$'];
echo $arr['Коля'] . '</br>';
echo $arr['Петя'] . '</br>';

// 28
$days = [
    1 => 'Понеділок',
    2 => 'Вівторок',
    3 => 'Середа',
    4 => 'Четвер',
    5 => 'Пятниця',
    6 => 'Субота',
    7 => 'Неділя',
];

function getCurrentDay($arr)
{
    echo $arr[date('w')] . '</br>';
}

getCurrentDay($days);

function getDay($arr, $day)
{
    echo $arr[$day] . '</br>';
}

getDay($days, 3);

// 29
$arr = [
    'cms' => ['joomla', 'wordpress', 'drupal'],
    'colors' => ['blue' => 'блакитний', 'red' => 'червоний', 'green' => 'зелений'],
];
echo $arr['cms'][0] . ', ' . $arr['cms'][2] . ', ' . $arr['colors']['green'] . ', ' . $arr['colors']['red'] . '</br>';

// 30
$multiLangArr = [
    'ua' => ['Понеділок', 'Вівторок', 'Середа', 'Четвер', 'Пятниця', 'Субота', 'Неділя'],
    'en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
];
echo $multiLangArr['ua'][0] . '</br>';
echo $multiLangArr['en'][2] . '</br>';

function getLocaleDay($arr, $lang, $day)
{
    echo $arr[$lang][$day - 1] . '</br>';
}

getLocaleDay($multiLangArr, 'en', 3);
