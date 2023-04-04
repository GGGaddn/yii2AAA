<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\tasks\models\Task */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'new' => 'New', 'inprogress' => 'Inprogress', 'done' => 'Done', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'priority')->textInput()->dropDownList([
            1=>1,2=>2,3=>3,4=>4,5=>5
    ]) ?>

    <?= $form->field($model, 'created')->textInput(['value' => date("Y-m-d H:i:s")]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
