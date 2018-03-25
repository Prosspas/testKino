<?php 

use yii\helpers\Html;
use yii\helpers\Url;
 ?>
<?php if(isset($model) == ture): ?>
    <div class="col-lg-4">
    	<img src="#" alt="">
        <h2><?=$model->title?></h2>

        <p><?=$model->desk?></p>

        <p>категория :  <a href="<?=Url::to(['site/category',$model->id_alias])?>"><?=$model->id_category?></a></p>

        <p><a class="btn btn-default" href="<?=Url::to(['site/view', 'id' => $model->id])?>">Подробности</a></p>
    </div>
<?php endif ?>