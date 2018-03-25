<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use backend\models\Categoryes;
use backend\models\Theaters;

/* @var $this yii\web\View */
/* @var $model backend\models\Films */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="films-form">

    <?php 

    $params = [
       'promt' => 'не указано'
    ]
     ?>

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

        <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'desk')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>
        
        <?= $form->field($model, 'id_category')->dropDownList(ArrayHelper::map(Categoryes::find()->all(),'category','category'),$params) ?>

        <?= $form->field($model, 'id_alias')->dropDownList(ArrayHelper::map(Categoryes::find()->all(),'alias','alias'),$params) ?>

        <?= $form->field($model, 'data_out')->textInput() ?>

        <?= $form->field($model, 'budget')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

        <?= $form->field($model, 'id_theater')->dropDownList(ArrayHelper::map(Theaters::find()->all(),'theater','theater'),$params) ?>

        <?= $form->field($model, 'imageFile')->fileInput() ?>

        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        </div>

    <?php ActiveForm::end(); ?>

</div>