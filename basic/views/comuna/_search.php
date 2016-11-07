<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ComunaSerch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="comuna-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'COMUNA_ID') ?>

    <?= $form->field($model, 'COMUNA_NOMBRE') ?>

    <?= $form->field($model, 'COMUNA_PROVINCIA_ID') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
