<?php
$trasport = array ('foot','bike','car','plane');
echo "<pre>";
print_r($trasport);
echo "</pre>";

$mode = current($trasport);
echo $mode. "<br>"; // $mode = 'foot';
$mode = next($trasport);
echo $mode. "<br>"; // $mode = 'bike';

$mode = current($trasport);
echo $mode. "<br>"; // $mode = 'bike';
$mode = prev($trasport);
echo $mode. "<br>"; // $mode = 'foot';

$mode = end($trasport);
echo $mode. "<br>"; // $mode = 'plane';
$mode = current($trasport);
echo $mode. "<br>"; // $mode = 'plane';