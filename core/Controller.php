<?php
namespace app\core;
use app\core\Application;
use app\core\middlewares\BaseMiddleware;

class Controller {

    public $layout = 'main';
    public $middlewares = [];
    public $action = '';


    public function setLayout($layout){
        $this->layout =$layout;
    }
    public function render($view, $params = [])
    {
        return Application::$app->view->renderview($view, $params);
    }
    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }
}
