<?php

//phpinfo();

include("/var/www/smarty/libs/Smarty.class.php"); 
$smarty = new Smarty(); 
$smarty->template_dir = './templates';
$smarty->compile_dir = './templates_c';
$smarty->config_dir = './configs';
$smarty->cache_dir = './cache';
$smarty->caching = false;

$smarty->left_delimiter = "<{";
$smarty->right_delimiter = "}>";


$smarty->assign("title", "test"); 
$smarty->assign("content","wocaonimagebi");

$smarty->display("test.tpl"); 



?>
