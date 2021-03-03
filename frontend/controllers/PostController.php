<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Debug;


class PostController extends Controller
{
    public function actionTest()
    {

        $names = ['Ivanov', 'Petrov', 'Petrov'];
//        var_dump(Yii::$app);
//        $this->debug(Yii::$app);
//        Debug::myVardump($names);

        return $this->render('test');
    }
}