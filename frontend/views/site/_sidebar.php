<?php 
use yii\helpers\Html;
use yii\helpers\Url;
 ?>
<?php if(!empty($getCategoryes) == true): ?>

    <a href="<?=Url::to(['site/index'])?>" class="list-group-item">Все фильмы</a>

    <?php foreach ($getCategoryes as $getCategory):?>

        <a href="<?=Url::to(['site/category',$getCategory->alias])?>" class="list-group-item"><?=$getCategory->category?></a>

    <?php endforeach ?>
    
<?php endif ?>