<?php
include "./setup.php";

$smarty=new Smarty_setup();
$smartyObj=$smarty->setUpSmarty();

$smarty->assign("name","spirit_xc");
$smarty->display("index.tpl");
?>
