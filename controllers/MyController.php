<?php

namespace app\controllers;

//use yii\web\Controller;

class MyController extends AppController
{
    public function actionIndex($id = null)
    {
        $hi = 'Hello, World';
        $names = ['Ivanov', 'Petrov', 'Sidirov'];
        //return $this->render('index', ['content' => $hi, 'names' => $names]);
        if (!$id) {
            $id = 'test';
        }
        return $this->render('index', compact('hi', 'names', 'id'));
    }

    public function actionBlogPost()
    {
        //my/blog-post
        return 'Blog Post';
    }
}
