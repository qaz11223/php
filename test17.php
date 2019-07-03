<?php

$person['Name'] = 'Clive';
$person['Age'] = '30';
$person['weight'] = '75';
echo $person['Name'];
echo '<hr>';

foreach ($person as $key => $value){
    echo "{$key} : {$value}<br>";
}