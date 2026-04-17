<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller {
    public function login()
    {

        $this->setLayout('auth');
        return $this->render('login');
    }
    public function register(Request $request)
    {
        $errors = [];
        $registerModel = new RegisterModel();
        if($request->isPost()) {
            $registerModel->loadData($request->getBody());
            if($registerModel->validate() && $registerModel->register()) {
                return 'success';
            }

        $this->setLayout('auth');

              return $this->render('register',[
            'model' => $registerModel
        ]);
            // $body = $request->getBody();
            // echo "<pre>";
            // var_dump($body);
            // echo "</pre>";
            // exit;
        }
        $this->setLayout('auth');
        return $this->render('register',[
            'model' => $registerModel
        ]);
    }
}
