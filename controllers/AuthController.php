<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\middlewares\AuthMiddleware;
use app\core\Request;
use app\models\LoginForm;
use app\models\User;

class AuthController extends Controller {
    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
    }
    public function login(Request $request)
    {
        if($request->isPost()) {
            $loginForm = new LoginForm();
            $loginForm->loadData($request->getBody());
            if($loginForm->validate() && $loginForm->login()) {
                 Application::$app->session->setFlash('success', 'Thanks for logging in');
                 Application::$app->response->redirect('/');

            }
        }

        $this->setLayout('auth');
        return $this->render('login',[
            'model' =>new LoginForm()
        ]);
             // $body = $request->getBody();
            // echo "<pre>";
            // var_dump($body);
            // echo "</pre>";
            // exit;
    }
    public function register(Request $request)
    {
        $errors = [];
        $user = new User();
        if($request->isPost()) {
            $user->loadData($request->getBody());
            if($user->validate() && $user->save()) {
                Application::$app->session->setFlash('success', 'Thanks for registering');
                 Application::$app->response->redirect('/');
            }

            }

        $this->setLayout('auth');

              return $this->render('register',[
            'model' => $user
        ]);
            // $body = $request->getBody();
            // echo "<pre>";
            // var_dump($body);
            // echo "</pre>";
            // exit;
        }
    //     $this->setLayout('auth');
    //     return $this->render('register',[
    //         'model' => $user
    //     ]);
    // }
    public function logout()
    {
        Application::$app->logout();
        Application::$app->response->redirect('/');
    }
    public function profile()
    {
        $this->setLayout('auth');
        return $this->render('profile');
    }
}
