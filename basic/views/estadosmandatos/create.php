<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Estadosmandatos */

$this->title = 'Create Estadosmandatos';
$this->params['breadcrumbs'][] = ['label' => 'Estadosmandatos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estadosmandatos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
