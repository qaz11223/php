<?php


function printName(){
    echo '九九乘法表';
}
?>
<table border='1'   width='100%'>
        <?php
        define("Rows" , 3) ;
        define("From" , 1) ;
        define("To" , 3) ;
        for ($r = 0 ; $r < Rows ; $r++){
            echo '<tr>';
            for ($k = From ; $k <= To ; $k++){
            echo '<td bgcolor="bluepink">';
            $newk = $k + (To-From+1) * $r ;
                for ($i = 1 ; $i <= 9 ; $i++){
                    $j = $newk * $i ;
                 echo "$newk x {$i} = {$j}<br>";
                }
            echo '</td>';
             }
        echo '</tr>';
        }
        ?>


</table>

