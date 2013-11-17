<?php
namespace application\modules\defaul\controllers;

use application\core\View;

class IndexController
{
    public function indexAction()
    {
        $v = new View();
        $v -> display('home.php');
    }
}
