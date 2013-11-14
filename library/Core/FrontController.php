<?php

namespace Core;

class FrontController{

    /**
     * @var FrontController
     */
    static protected $instance;

    static public function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    static function hello()
    {
        return 'hello';
    }

    public function getControllerPath($controller, $module)
    {
        return ROOT . '/application/modules/'.$module.'/controllers/'.$controller.'.php';
    }

    static public function dispatch(Request $request){
        $module=$request->getModule();
        Registry::setValue('module',$module);
        $controller= ucfirst($request->getController());
        $action=$request->getAction().'Action';
        $controller_file=self::getInstance()->getControllerPath($controller, $module);
        $controller_class=$controller.'Controller';

        if (file_exists($controller_file)){
            require_once ($controller_file);
        }else{
            echo "file not found".$controller_file;
            http_response_code(404);
            exit;

        }

        if (class_exists($controller_class)){
            $controller_class=new $controller_class();
        }else{
            echo "class not found";
        }

        if (method_exists($controller_class,$action)){
            $run_controller=$controller_class->$action();
        }else{
            echo "method not found";
        }


    }

}
