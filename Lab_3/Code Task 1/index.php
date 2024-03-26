<?php
//TASK 1.1

$str = 'ahba atha abbba aima' ;
$a = '/a[a-z][a-z]a/ui';
preg_match_all($a, $str,$matches);
foreach($matches[0] as $m)
{
    echo $m,"\n";
}

?>
