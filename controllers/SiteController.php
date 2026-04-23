<?php
namespace app\controllers;
use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller {
    public function home()
    {
        $params = [
            'name' => 'Mohamed Elmasry'
        ];
        return $this->render('home', $params);
    }
    public function contact()
    {
        $contactForm = new \app\models\ContactForm();
        if(Application::$app->request->isPost()) {
            $contactForm->loadData(Application::$app->request->getBody());
            if($contactForm->validate() && $contactForm->send()) {
                Application::$app->session->setFlash('success', 'Thanks for contacting us');
                Application::$app->response->redirect('/contact');
            }
        }
        return $this->render('contact', ['model' => $contactForm]);
    }
    public function handleContact(Request $request)
    {
        $body = $request->getBody();
        var_dump($body);
    }
}
