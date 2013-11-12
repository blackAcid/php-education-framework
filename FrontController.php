<?php
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors','On');
class FrontController{
//require_once("Request.php");
    static public function dispatch(Request $request){
        $controller=$request->getController();
        $action=$request->getAction();
        $controller_file=__DIR__.'/'.$controller.'.php';
        $controller_class=$controller;
        /*echo "controller_file ".$controller_file
            ."<br>controller_class ".$controller_class;
        echo "controller is ".$controller
            ."<br>action is ".$action
            ."<br>controller_folder is ".$controller_folder;*/
        if (!file_exists($controller_file))
            echo "file not found";
        require_once ($controller_file);
        if (!class_exists($controller_class))
        echo "class not found";
        $controller_class=new $controller_class();
        if (!method_exists($controller_class,$action))
            echo "method not found";
        $run_controller=$controller_class->$action();
}
    static public function runModel(Request $request){

    }
}
