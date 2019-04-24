<?php

namespace app\components;

use app\components\FileComponent;
use yii\base\Component;
use yii\helpers\FileHelper;
use yii\web\UploadedFile;
use app\models\Activity;



class ActivityComponent extends Component
{
    public $activity_class;

    public function init(){

        parent:: init();

        if (empty($this->activity_class)){
            throw new \Exception('Need activity_class param');
        }
    }

    public function getModel(){
        return new $this->activity_class;
    }

    public function createActivity(&$model):bool{

        $model->file=FileComponent::getUploadedFile($model,'file');


        if(!$model->validate()){
          //  print_r($model->GetErrors());
            return false;
        }

        if($model->file) {
            foreach ($model->file as $oneFile) {
                $path = FileComponent::genFilePath(FileComponent::genFileName($oneFile));

                if (!FileComponent::saveUploadedFile($oneFile, $path)) {
                    $model->addError('file', 'не удалось сохранить файл');
                    return false;
                } else {
                    $model->file = basename($path);

                };


            }
        }
        return true;
    }


}