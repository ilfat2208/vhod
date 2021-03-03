<?php


namespace frontend\models;


class Debug
{
    /**
     * Мой вардамп
     * @param $var
     */
    public static function myVardump($var) {


        if(\Yii::$app->params['isDebug']) {
            echo "<pre>";
            var_dump($var);
            echo "</pre>";
            die;
        }
    }
}