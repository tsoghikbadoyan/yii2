<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use \yii\base\HttpException;
use app\models\Post;

class SiteController extends Controller
{
    public function actionIndex()
    {
        $var1 = "hello";
        $array = [
                    1=>"first",
                    2=>"second",
                    3=>"third",
        ];
        return $this->render('index',['varInview' => $var1, 'arrayInview'=>$array]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionHello()
    {
        return $this->render('hello');
    }


}
