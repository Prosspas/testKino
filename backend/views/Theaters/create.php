<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Theaters */

$this->title = 'Create Theaters';
$this->params['breadcrumbs'][] = ['label' => 'Theaters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="theaters-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
