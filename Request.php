<?php
/**
 * Created by PhpStorm.
 * User: anna
 * Date: 11.11.13
 * Time: 11:13
 */

class Request {
 private $controller="testController";
 private $action="printStr";
 private $module;
 private $params;
 private $view;
   function __construct($controller,$action){
        $this->controller=$controller;
        $this->action=$action;
        /*$this->module=$module;
        $this->params=$params;*/
    }
    function getController(){
        return $this->controller;
    }
    function getAction(){
        return $this->action;
    }
    // getModule
    //getParams
    //getView
}