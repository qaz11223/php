<?php

$poker = range(0,51);
shuffle($poker);

foreach($poker as $value){
    echo $value . '<br>';
}
echo '<hr>';

$players = [[],[],[],[]];
foreach ($poker as $i => $card){
    $players[$i%4][(int)($i/4)] = $card;
}


?>

<table border='1'   width='100%'>
    <tr>
        <?php
        $suits = array("&spades;","<font color='red'>&hearts;</font>","&diams;","<font color='red'>&clubs;<font>");
        $value = array('A',1,2,3,4,5,6,7,8,9,10,'J','Q','K');
        foreach($players as $player){
            sort($player);
            echo "<tr>";

        foreach ($player as $card){
            echo "<td>";
            echo "{$suits[(int)($card/13)]}{$value[$card%13]}";
            echo "</td>";
            }
        echo "</tr>";
        }

        ?>
    </tr>
</table>