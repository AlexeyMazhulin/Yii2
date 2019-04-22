<?php
/**
* @var $this \yii\web\\View
 * @var $model  \app\models\Activity

 */
?>
<div class = "row">
    <div class="col-md-12">
        <h3>Добавление события</h3>
        <?php $form=\yii\bootstrap\ActiveForm::begin([
            ]);?>
            <?=$form->field($model,'title')?>
            <?=$form->field($model,'description')->textarea(['data-attr'=>2])?>
            <?=$form->field($model,'date_start')->input('date');?>
            <?=$form->field($model,'is_blocked')->checkbox();?>
            <?=$form->field($model,'repeatable')->checkbox();?>
        <div class="form-group">
            <button class="btn btn-default" type="submit">Создать</button>
        </div>


        <?php yii\bootstrap\ActiveForm::end();?>
    </div>
</div>
