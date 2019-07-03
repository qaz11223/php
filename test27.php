<?php

$fp = @fopen('view-source:https://tw.news.yahoo.com/','r');

$i = 1 ;
while ($line = fgetss($fp)){
    if (preg_match('/href/',$line)){
        if (preg_match('/yimg/',$line)){
            echo "{$i} => {$line}";
            $i++;
        }

    }
}

fclose($fp);
?>