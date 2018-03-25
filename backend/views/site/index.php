<?php

/* @var $this yii\web\View */

$this->title = 'Карточки';
use yii\helpers\Url;
?>

<div class="site-index">

    <div class="body-content">
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Фильмы<sup style="font-size: 20px"></sup></h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?=Url::to(['/films/index']);?>" class="small-box-footer">Редактировать<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Кинотеатры<sup style="font-size: 20px"></sup></h3>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?=Url::to(['/theaters/index']);?>" class="small-box-footer">Редактировать<i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
    </div>
    
</div>
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\Categoryes;
use backend\models\Theaters;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\Films */
/* @var $form yii\widgets\ActiveForm */
?>
<?php 

    $params = ['promt' => 'не указано'];
 ?>

