<?php
    include_once 'testutils.php';
    $twid = createTWid(false);
   echo $twid . '<br>';
   if (isTWid($twid)){
       echo 'OK';
   }else{
       echo 'X';
   }
?>