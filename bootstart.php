<?php

define('DIR', realpath(__DIR__));
define('DIR_CORE', DIR.'/application/core/');
define('DIR_MOD', DIR.'/application/modules/');
function __autoload($file) {
    $path = str_replace('\\','/',DIR.'/'.$file.'.php');
    require_once ($path);
}

