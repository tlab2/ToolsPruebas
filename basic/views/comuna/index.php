<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ComunaSerch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Comunas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comuna-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Comuna', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'COMUNA_ID',
            'COMUNA_NOMBRE',
            'COMUNA_PROVINCIA_ID',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
