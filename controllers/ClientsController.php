<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 03.12.18
 * Time: 11:15
 */
namespace app\controllers;
use Yii;

class ClientsController extends AppController
{

    public function actionIndex(){
        $this->setSelector();
        return $this->render('index');
    }
}