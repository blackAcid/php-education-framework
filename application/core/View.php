<?php

class View{

    public function display($content,$data=array()){
        $module=Registry::getValue('module');
        include $_SERVER['DOCUMENT_ROOT']."/php-education-framework/template.php";
    }
}