<?php
date_default_timezone_set('Asia/Taipei');
$mydir = '.';
$fp = @opendir($mydir) or exit('Get out!'); //@+function抑制錯誤訊息不顯示
// $str =readdir($fp);
// echo $str . '<br>';
// $str =readdir($fp);
// echo $str . '<br>';
// $str =readdir($fp);
// echo $str . '<br>';
// $str =readdir($fp);
// echo $str . '<br>';
while ($file = readdir($fp)){
    $mtime = filemtime("{$mydir}/{$file}");
    $ntime = date('Y-m-d H:i:s',$mtime);
    $files = is_file("{$mydir}/{$file}");
    $len = filesize("{$mydir}/{$file}");
    echo "檔案名稱:{$file}, 大小: {$len}, 修改時間: {$mtime} => {$ntime}, 是否為檔案: {$files}<br>";

    if (unlink("./delete.php")){
        echo 'Delete Complete!';
    }
}