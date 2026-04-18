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
public Database $db;
public Session $session;

    public function __construct($rootPath ,array $config)
    {
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        self::$ROOT_DIR = $rootPath;
        $this->db = new Database($config['db']);
        $this->session = new Session();
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
