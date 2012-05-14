<?php
    include ("./libs/Smarty.class.php");
    class Smarty_setup extends Smarty
    {
        function setUpSmarty()
        {
            $this->template_dir='./templates';
            $this->compile_dir='./templates_c';
            $this->config_dir='./configs';
            $this->cache_dir='./cache';
            $this->caching=false;

            $this->left_delimiter="<{";
            $this->right_delimiter="}>";
        }
    }
?>
