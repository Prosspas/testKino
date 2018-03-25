<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Categoryes */

$this->title = 'Create Categoryes';
$this->params['breadcrumbs'][] = ['label' => 'Categoryes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="categoryes-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
