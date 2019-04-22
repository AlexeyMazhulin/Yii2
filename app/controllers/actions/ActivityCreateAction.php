<?php


namespace app\controllers\actions;


use app\components\ActivityComponent;
use app\models\Activity;
use yii\base\Action;

class ActivityCreateAction extends Action
{
    public function run()
    {
        $model=\Yii::$app->activity->getModel();

        if(\Yii::$app->request->isPost){
            $model->load(\Yii::$app->request->post());

            $comp=\Yii::createObject(['class'=>ActivityComponent::class,'activity_class'=>Activity::class]);
        if($comp->createActivity($model)){

        };

        }


        return $this->controller->render('create',['model'=>$model]);

    }

}