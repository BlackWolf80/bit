<?php
namespace app\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;
use Yii;


class AppController extends Controller
{

    public function behaviors(){
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ]
                ]
            ]
        ];
    }

    public function debug($arr)
    {
        echo '<pre>'. print_r($arr, true).'</pre>';
    }


    protected function setMeta($title = null, $keywords = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }


    public function setSelector(){

        //добавление в сессию стартового положения меню
        $session = Yii::$app->session;
        if (!$session->isActive){
            $session->open();
        }

        if(!isset($_SESSION['selector'] )){
            $_SESSION['selector'] = 'sidebar-opened';
        }
    }

}

function debug($arr){echo '<pre>'. print_r($arr, true).'</pre>';}