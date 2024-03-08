<?php
echo phpinfo();

//task 1

$very_bad_unclear_name = "15 chicken wings";

$order = & $very_bad_unclear_name;
$order .= ",cola and one hamburger";

echo "\nYour order is: $very_bad_unclear_name.";


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
echo "\n Разница предыдущего и этого месяца : " , $last_month - $this_month;

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
echo "Квадратный корень из 379: ", sqrt (379);
echo "Округляем рез-т до целых: ", round(sqrt(379));
echo "до десятых: ", round(sqrt(379,1));
echo "до сотых: ", round(sqrt(379,2));
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







