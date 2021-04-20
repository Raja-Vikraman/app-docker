<?php
$config['app']['basePath'] = dirname(__FILE__);
// echo $config['app']['basePath'];
file_put_contents($config['app']['basePath']."/QUERY_FILE/test.txt","\nThis is from ---".$_SERVER['SERVER_ADDR'],FILE_APPEND);
?>

