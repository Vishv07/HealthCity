<?php

$string = 'Paneer Pakoda dish';
$s = ucfirst($string);


$bar = ucwords(strtolower($s));

echo $bar;
echo $data = preg_replace('/\s+/', '', $bar);




?>