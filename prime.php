
<?php
/*
 * 印出質數
 */
define("rows", 150);      //幾行
define("from",1);
define("to",5);
?>

<table width="100%" border="1">
    <h4 align="center">抓出質數</h4>
    <hr>
<?php
  for ($r=0;$r<rows;$r++) {
    echo "<tr>";
      for ($c=from;$c<=to;$c++) {
          $newj = (to-from+1) * $r + $c;  //每一格的數值
          if ($newj < 2){
              echo "<td>{$newj}</td>";
          }elseif($newj == 2){
              echo "<td bgcolor='#ff8c00' style='font: bold'>{$newj}</td>";
          }else{
              for ($m=2;$m<$newj;$m++){
                  if ($newj % $m == 0) {
                      $result = "<td>{$newj}</td>";
                      break;
                  }else{
                      $result = "<td bgcolor='#ff8c00' style='font: bold'>{$newj}</td>";
                  }
              }
              echo $result;
          }
      }
    echo "</tr>";
  }
?>
</table>

