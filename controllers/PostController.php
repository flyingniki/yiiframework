<?php

namespace app\controllers;

use yii;
use app\models\TestForm;
use yii\bootstrap4\Modal;

class PostController extends AppController
{
    public $layout = 'basic';

    public function beforeAction($action)
    {
        //debug($action); 
        if ($action->id == 'index') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }


    public function actionIndex()
    {
        // if (Yii::$app->request->isAjax) {
        //     //debug($_POST);
        //     debug(Yii::$app->request->post());
        //     return 'test';
        // }

        $model = new TestForm();

        // $names = ['Ivanov', 'Petrov', 'Sidirov'];
        // // print_r($names);
        // // var_dump($names);
        // //var_dump(Yii::$app);
        // //$this->debug(Yii::$app);
        // $this->debug($names);
        return $this->render('test', compact('model'));
    }

    public function actionShow()
    {
        // $this->layout = 'basic';
        $this->view->title = 'Одна статья!!!';
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'ключевики...']);
        $this->view->registerMetaTag(['name' => 'description', 'content' => 'описания...']);
        return $this->render('show');
    }
}
