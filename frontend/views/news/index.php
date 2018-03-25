<?php 
	
use yii\widgets\ListView;
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Новости';
 ?>
<div class="site-index">
    <div class="row">
        <div class="col-md-10">
            <div class="body-content">
                <h2>новости</h2>
                
                <div class="row">
                    <?php 

                        echo ListView::widget([
                                'dataProvider' => $listDataProvider,
                                'itemView' => '_blocNews',
                                'emptyText' => 'Простите но на данный момент событий нет',
                            ]);

                     ?>
                </div>

            </div>
        </div>
    </div>
</div>