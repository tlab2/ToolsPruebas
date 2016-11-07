<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Comuna */

$this->title = 'Update Comuna: ' . $model->COMUNA_ID;
$this->params['breadcrumbs'][] = ['label' => 'Comunas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->COMUNA_ID, 'url' => ['view', 'id' => $model->COMUNA_ID]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="comuna-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
