<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 11/14/13
 * Time: 10:17 AM
 */
require_once realpath(__DIR__ . "/../../vendor/autoload.php");

use \Core;

class FrontControllerTest extends PHPUnit_Framework_TestCase{
    public function testDispatch()
    {
        $message = Core\FrontController::hello();

        $this->assertEquals($message, 'hello');
    }

    public function testGetInstance()
    {
        $frontController = Core\FrontController::getInstance();

        $this->assertInstanceOf('Core\FrontController', $frontController);
    }

    public function testGetControllerPath()
    {
        $frontController = new Core\FrontController();

        $this->assertEquals($frontController->getControllerPath('Index', 'default'), ROOT . '/application/modules/default/controllers/Index.php');
    }
} 