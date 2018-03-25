<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\CategoryesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Categoryes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoryes-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Categoryes', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category',
            // 'alias',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
