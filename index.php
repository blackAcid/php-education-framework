<?php
//ini_set('display_errors',1);
require_once 'bootstart.php';

use application\core\FrontController;
use application\core\Request;

try
{
    $req=new Request();
    FrontController::dispatch($req);
}
catch (Exception $e)
{
    die($e->getMessage());
}