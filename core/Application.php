<?php
namespace app\core;
use app\core\Router;

class Application{
    public $userClass;
public string $layout = 'main';
public $view;

public Router $router;
public static $ROOT_DIR;
public Request $request;
public Response $response;
public static Application $app;
public ?Controller $controller = null;
public Database $db;
public Session $session;
public ?DbModel $user;
    public function __construct($rootPath ,array $config)
    {
        $this->userClass = $config['userClass'];
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
        self::$ROOT_DIR = $rootPath;
        $this->db = new Database($config['db']);
        $this->session = new Session();
        self::$app = $this;
        $primaryValue = $this->session->get('user');
        if($primaryValue) {
            $primaryKey = $this->userClass::primaryKey();
            $this->user = $this->userClass::findOne([$primaryKey => $primaryValue]);
        }
        else {
            $this->user = null;
        }
        $this->view = new View();
    }
    public function run()
    {
        try {
            echo $this->router->resolve();
        } catch (\Exception $e) {
            $this->response->setStatusCode($e->getCode());
            echo $this->view->renderView('_errors', [
                'exception' => $e
            ]);
        }
    }
    public function setController(Controller $controller)
    {
        return $this->controller = $controller;
    }
    public function getController()
    {
        return $this->controller;
    }
    public function login(DbModel $user)
    {
        $this->user = $user;
        $primaryKey = $user->primaryKey();
        $primaryValue = $user->{$primaryKey};
        $this->session->set('user', $primaryValue);
        return true;
    }
    public function logout()
    {
        $this->user = null;
        $this->session->remove('user');
    }
    public static function isGuest()
    {
        return !self::$app->user;
    }

}
