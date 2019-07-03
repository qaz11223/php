<?php

$fp = @fopen('./dir1/file2.txt','a');
fwrite($fp,"Hello,World\ntest123");
fwrite($fp,"Hello,World\ntest123\n");
fwrite($fp,"Hello,World\ntest123\n");
fflush($fp);
fclose($fp);
echo 'Success';

?>