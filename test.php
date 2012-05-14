

<?php

include_once("../lib/Smarty.class.php");
$smarty=new Smarty();

$smarty->templates_dir="./templates";
$smarty->compile_dir="./templates_c";

$smarty->left_delimiter="<{";
$smarty->right_delimiter="}>";

$smarty->assign("name","spirit_xc");

$smarty->display("test.tpl");
?>

