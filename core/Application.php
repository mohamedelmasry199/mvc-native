<?php
namespace app\core;
use app\core\Router;
class Application{
public Router $router;
public static $ROOT_DIR;
public Request $request;
public Response $response;
public static Application $app;
public Controller $controller;

    public function __construct($rootPath)
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;
    }
    public function run()
    {
        echo $this->router->resolve();
    }
    public function setController(Controller $controller)
    {
        return $this->controller = $controller;
    }
    public function getController()
    {
        return $this->controller;
    }

}
