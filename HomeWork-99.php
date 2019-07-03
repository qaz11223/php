九九乘法表
<table border='1' width='100%'>
    <?php
    define("ROWS", 4);
    define("FROM", 1);
    define("TO", 5);
    $c1="yellow";$c2="pink";
    for ($k = 0; $k < ROWS; $k++){
        echo '<tr>';
        for ($j = FROM; $j<=TO; $j++){
            if($k % 2 == 1 and $j % 2 == 0){
                $color = $c1;
            }elseif($k % 2 == 0 and $j % 2 == 1){
                $color = $c1;
            }else{
                $color = $c2;
            }

            echo "<td bgcolor=$color>";
            $newj = $j + (TO-FROM+1) * $k;
            for ($i = 1; $i<=9; $i++ ){
                $r = $newj * $i;
                echo "{$newj} x {$i} = {$r}<br>";
            }
            echo '</td>';
        }
        echo '</tr>';
    }
    ?>
</table>