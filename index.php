<?php
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors','On');
function __autoload($file) {
    include $file . '.php';
}
$req=new Request ("testController","printError");
FrontController::dispatch($req);
