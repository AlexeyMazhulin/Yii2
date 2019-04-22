<?php

namespace app\components;

use phpDocumentor\Reflection\Types\Boolean;
use yii\base\Component;

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
        if(!$model->validate()){
            print_r($model->GetErrors());
            return false;
        }
        return true;

    }

}