<?php 
$state = 'Gujarat';

if($state == 'Gujarat')
{

  $prefix = 'GJ';
}

	$n=10; 

    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'; 
    $randomString = ''; 
  
    for ($i = 0; $i < $n; $i++) 
    { 
        $index = rand(0, strlen($characters) - 1); 
        $randomString .= $characters[$index]; 
    } 
  
    echo $prefix.$randomString; 
 
  

?> 