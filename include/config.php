<?php
defined('server') ? null : define("server", "sql102.epizy.com");
defined('user') ? null : define ("user", "epiz_28373007") ;
defined('pass') ? null : define("pass","0ifLZttsWNo2b");
defined('database_name') ? null : define("database_name", "epiz_28373007_db_ecommerce") ;

$this_file = str_replace('\\', '/', __File__) ;
$doc_root = $_SERVER['DOCUMENT_ROOT'];

$web_root =  str_replace (array($doc_root, "include/config.php") , '' , $this_file);
$server_root = str_replace ('config/config.php' ,'', $this_file);


define ('web_root' , $web_root);
define('server_root' , $server_root);
?>