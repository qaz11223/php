<?php
    $year = 2400;
    echo $year . '<br>';
    if ($year % 400 == 0){
        echo '這是閏年';
    }else{
        if ($year % 100 == 0){
            echo '這不是閏年';
        }else{
            if ($year % 4 == 0){
                echo '這是閏年';
            }else{
                echo '這不是閏年';
            }
        }
    }


if (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0)){
    echo '<hr>29';
}else{
    echo '<hr>28';
}

?>