<?php


namespace app\base;


use yii\web\Controller;

class BaseController extends Controller
{
    public function afterAction($action,$result){

        \Yii::$app->session->set('page_url',\Yii::$app->request->url);

        return parent::afterAction($action,$result);
    }

}