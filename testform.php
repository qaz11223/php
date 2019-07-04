<?php
/*
 * 印出質數
 */
define("rows", 80);      //幾行
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
          $newj = (to-from+1) * $r + $c;  //新的一行
          if (($newj == 2) || ($newj == 3) || ($newj == 5) || ($newj == 7) || ($newj == 11) || ($newj == 13)) {  //固定的質數
              echo "<td bgcolor='#ff8c00' style='font: bold'>{$newj}</td>";
           }else{
              if (($newj > 1) && ($newj % 2 !== 0) && ($newj % 3 !== 0) && ($newj % 5 !== 0) && ($newj % 7 !== 0) && ($newj % 11 !== 0) && ($newj % 13 !== 0)) {   // 符合這些條件的為質數
                  echo "<td bgcolor='#ff8c00'>{$newj}</td>";
              } else {
                  echo "<td>{$newj}</td>";
              }
          }
      }
    echo "</tr>";
  }
?>
</table>