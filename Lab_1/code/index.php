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