<?php

define('ROOT', realpath(__DIR__));

function __autoload($file) {
     $file=ROOT . '/application/core/'.$file.'.php';
     require_once($file);
}
