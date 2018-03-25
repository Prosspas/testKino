<?php 

use yii\helpers\Url;
 ?>
<div class="panel">
    <div class="panel-heading">
        <div class="text-center">
            <div class="row">
                <div class="col-sm-9">
                    <h3 class="pull-left"><?=$model->title?></h3>
                </div>
                <div class="col-sm-3">
                    <h4 class="pull-right">
                    <small><em>2014-07-30<br>18:30:00</em></small>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    
    <div class="panel-body">
         <?=$model->desk?><a href="<?=Url::to(['news/view', 'id' => $model->id])?>">Read more</a>
    </div>
</div>