<?php 
use yii\widgets\ListView;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\base\View;

if($result == true)
{ 
    $this->title = $result; 

} else {

    $this->title = "Запрос не дал результата";
}
 ?>
<div class="site-index">
    <div class="row">
        <div class="col-md-2">
            <h2>Категории</h2>
            <div class="group">
                <div class="list-group">
                    <?=View::render('_sideBar', array('getCategoryes' => $getCategoryes))?>
                </div>
            </div>
        </div>
        <div class="col-md-10">
            <div class="body-content">
                <h2><?=$result?></h2>
                <div class="row">
                    <?php 

                        echo ListView::widget([
                                'dataProvider' => $listDataProvider,
                                'itemView' => '_categorySingle',
                                'emptyText' => 'Запрос не дал результата',
                            ]);

                     ?>
                </div>

            </div>
        </div>
    </div>
</div>