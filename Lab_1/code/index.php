<?php
echo phpinfo();

//task 1

$very_bad_unclear_name = "15 chicken wings";

$order = & $very_bad_unclear_name;
$order .= ",cola and one hamburger";

echo "\nYour order is: $very_bad_unclear_name.";
echo "\n";

//task 2

$number1 = 8;
echo "$number1";
echo "\n";
$number2 = 20.5;
echo "$number2";
$number3 = 4;

echo "\n" , $number1 + $number3;

$last_month = 1187.23;
$this_month = 1089.98;
echo "\nРазница предыдущего и этого месяца : " , $last_month - $this_month;
echo "\n";

//task 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo "в среднем дней на язык: {$days_per_language}";
echo "\n";

//task 12
echo 8**2, "\n";

//task 13
$my_num = 8;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n" , $answer;
echo "\n";

//task 14
$a = 10;
$b = 3;
$c = $a % $b;
if ($c == 0)
    echo "Делится";
else
    echo "Делится с остатком,равному $c";

$st1 = pow(2,10);
echo "\n$st1";

$st2 = sqrt(245);
echo "\n$st2";


$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $value) {
    $sum += $value ** 2;
}
$st3 = sqrt($sum);
echo "\n $st3";
echo "\n";
echo "\nКвадратный корень из 379: ", sqrt (379) ;
echo "\nОкругляем рез-т до целых: ", round(sqrt(379));
echo "\nдо десятых: ", round(sqrt(379),1);
echo "\nдо сотых: ", round(sqrt(379),2);
echo "\n";


$root = sqrt(587);
$rounding =  Array('floor' => floor($root),  'ceil' => ceil($root));
echo "\n";

$array1 = [4, -2, 5, 19, -130, 0, 10];
$mini = min($array1);
$maxi = max($array1);

echo "мин $mini, макс $maxi значения";
echo "\n";

echo "Рандомное число : ", rand(1, 100);
echo "\n";

$ar = [];
for($i = 0; $i <= 9; $i++) {
    $ar[] = rand(1, 100);
}
echo "\n";

$a = 8;
$b = 20;
echo "Модуль разности равен: ",abs($a-$b);
echo "\n";

$array2 =  [1, 2, -1, -2, 3, -3];
$array3 = [];
for($i = 0; $i <= 5; $i++) {
    $array3[] = abs($array2[$i]);
}
echo "\n";

$ch = 64;
$arch = [];
echo "Делители числа ch: ";
for($i=1; $i <= $ch / 2 + 1; $i++) {
    if ($ch % $i == 0) {
        $arch[] = $i;
        echo "{$i} ";
    }
}
echo "\n";


$nu = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$su = 0;
$ct = 0;
while ($su <= 10){
    $su += $nu[$ct];
    $ct += 1;
}
echo "нужно сложить первые $ct чисел";
echo "\n";

//task 15
function printStringReturnNumber($string)
{
    echo $string;
    return 8;
}

$mn= printStringReturnNumber("Строка: ");
echo "Мое число равно = $mn";
echo "\n";

//task 16
function increaseEnthusiasm($string)
{
    $string .= "!";
    return $string;
}
echo "\n", increaseEnthusiasm("с 8 марта <3");
function repeatThreeTimes($string){
    return $string . $string. $string;
}
echo "\n", repeatThreeTimes("0000");
echo "\n", increaseEnthusiasm(repeatThreeTimes("0000"));
echo "\n";

function cut($str, $length = 10)
{
    return substr($str, 0, $length);
}
echo "\n", cut("anime", 2);
function printArr($arr, $count=0){
    echo"\n {$count}: {$arr[$count]}";
    if($count+1 != sizeof($arr)){
        printArr($arr, $count+1);}
}
printArr($array3);

function summa($int){
    $sum = 0;
    while ($int > 0)
    {
        $sum += $int % 10;
        $int = (int)($int / 10);
    }
    if ($sum > 9)
    {
        return summa($sum);
    }
    return $sum;
}
$x = summa(666);
echo "\n",$x;
echo "\n";

//task 17
function fillArray($val, $cnt)
{
    $array = [];
    for ($i = 0; $i < $cnt; $i++)
    {
        $array[] = str_repeat($val, $i + 1);
    }
    return $array;
}

foreach (fillArray("x", 5) as $elka) echo "\n$elka";
echo "\n";

$array5 =  [[1, 2, 3], [4, 5], [6]];
function Summ(array $arr): int {
    $ct = 0;
    foreach ($arr as $array5) {
        foreach ($array5 as $b) {
            $ct += $b;
        }
    }
    return $ct;
}
echo"\nСумма элементов массива равна: ",Summ($array5);
echo "\n";

function crArr($size, $chunk_size){
    if($size % $chunk_size !=0){
        return;
    }
    $arr = [];
    $counter = 1;

    for($i = 0; $i <= (int)($size / $chunk_size)-1; $i++){
        $subarr = [];

        for($j=0; $j <= $chunk_size-1; $j++){
            $subarr[] = $counter;
            $counter++;
        }
        $arr[] = $subarr;
    }

    foreach ($arr as $subar){
        foreach ($subar as $el){
            echo"\n", " {$el}";
        }
    }
}

crArr(9, 3);
echo"\n";


$array7 = [2, 5, 3, 9];
$result = ($array7[0] * $array7[1]) + ($array7[2] * $array7[3]);
echo "Результат: $result";
echo"\n";

$user = Array('name'=> "Нурсултан", 'surname'=>"Назарбаев", 'patronymic' => "Абишевич");
echo"{$user['name']} {$user['surname']} {$user['patronymic']}";
echo"\n";

$date = Array('year'=> "2024", 'month'=>"03", 'day' => "09");
echo"{$date['year']} {$date['month']} {$date['day']}";
echo"\n";

$array8 = ['a', 'b', 'c', 'd', 'e'];
echo "Кол-о элементов : ",count($array8);
echo"\n";
echo"Последний и предпоследний: $array8[4],$array8[3]";
echo"\n";

//task 18
function inty($n, $m){
    if ($n + $m >10)
        return "Cумма больше 10)))";
    else
        return "Сумма меньше 10(((";
}
$n1 = inty(5, 3);
echo"\n",$n1;

function same($n, $m){
    if ($n == $m)
        return "Числа равны)))";
    else
        return "Числа не равны(((";
}
$m1 = same(5, 3);
echo"\n",$m1;
echo"\n";

$test =0;
if ($test == 0) echo 'верно';
echo"\n";

$age = 97;
if ($age <10 or $age>99)
    echo "Вы не дееспособны";
else
    $sum = 0;
while ($age > 0)
{
    $sum += $age % 10;
    $age = (int)($age / 10);
}
if ($sum > 9) echo"\nСумма цифр двузначна: $sum";
else echo"\nСумма цифр однозначна: $sum";
echo "\n";

$array9= [8, 9, 3];
if (count($array9) == 3)
    echo"Сумма элементов массива:", array_sum($array9);
echo"\n";

