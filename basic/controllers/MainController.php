<?php
namespace app\controllers;

use app\models\Users;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use \yii\base\HttpException;
use app\models\Post;


class MainController extends Controller
{

//    public function actionIndex()
//    {
////        $connection = \Yii::$app->db;
////        $model = $connection->createCommand('SELECT * FROM users');
////        $users = $model->queryAll();
////        var_dump($users);
//
//        return $this->render('index');
//    }

    public function actionIndex()
    {
        $post = new Post;
        $data = $post->find()->all();
        echo $this->render('index', array(
            'data' => $data
        ));
    }

    public function actionRead($id = NULL)
    {
        if ($id === NULL)
            throw new HttpException(404, 'Not Found');
        $post = Post::find($id);
        if ($post === NULL)
            throw new HttpException(404, 'Document Does Not Exist');
        echo $this->render('read', array(
            'post' => $post
        ));
    }

    public function actionDelete($id = NULL)
    {
        if ($id === NULL) {
            Yii::$app->session->setFlash('PostDeletedError');
            Yii::$app->getResponse()->redirect(array('main/index'));
        }
        $post = Post::find($id);
        if ($post === NULL) {
            Yii::$app->session->setFlash('PostDeletedError');
            Yii::$app->getResponse()->redirect(array('main/index'));
        }
        $post->delete();
        Yii::$app->session->setFlash('PostDeleted');
        Yii::$app->getResponse()->redirect(array('main/index'));
    }
}