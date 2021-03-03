<?php

namespace frontend\controllers\admin;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}