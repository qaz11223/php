<?php
$passwd = '123456';
$passwd1 = password_hash($passwd,PASSWORD_DEFAULT);
echo $passwd1.'<br>';
echo strlen($passwd1);
echo '<hr>';



$passwd2 = '123456';
$passwd3 = password_hash($passwd2,PASSWORD_DEFAULT);
echo $passwd3.'<br>';
if (password_verify($passwd3,$passwd1)){
    echo 'OK';
}else{
    echo 'XX';
}
?>