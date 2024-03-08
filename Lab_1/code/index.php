<?php
echo phpinfo();

//task 1
$very_bad_unclear_name = "15 chicken wings";

$order = & $very_bad_unclear_name;
$order .= ",cola and one hamburger";

echo "\nYour order is: $very_bad_unclear_name.";


