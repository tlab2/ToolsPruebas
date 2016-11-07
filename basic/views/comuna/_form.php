<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Comuna */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comuna-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'COMUNA_ID')->textInput() ?>

    <?= $form->field($model, 'COMUNA_NOMBRE')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'COMUNA_PROVINCIA_ID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
