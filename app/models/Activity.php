<?php


namespace app\models;


use yii\base\Model;


class Activity extends Model
{
    public $title;

    public $description;

    public $date_start;

    public $repeatable;

    public $is_blocked;

    public function rules()
    {
        return [
            ['title','required'],
            ['description','string','min'=>10],
            ['date_start','string'],
            ['repeatable','boolean'],
            ['is_blocked','boolean']

        ];
    }

    public function attributeLabels()
    {
        return [
            'title' => 'Заголовок события',
            'description' => 'Описание',
            'date_start' => 'Дата начала',
            'repeatable' => 'Повторяемое событие',
            'is_blocked' => 'Блоктрующее событие'
        ];
    }
}