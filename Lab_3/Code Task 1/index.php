<?php
//TASK 1.1

$str = 'ahba atha abbba aima' ;
$a = '/a[a-z][a-z]a/ui';
preg_match_all($a, $str,$matches);
foreach($matches[0] as $m)
{
    echo $m,"\n";
}


//TASK 1.2
function cube($matches) {
return pow($matches[0], 3);
}

$str = 'a1b2c3';
$res = preg_replace_callback('/[0-9]/u', 'cube', $str);

echo $res;
?>