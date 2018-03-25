<?php 
	
use yii\widgets\ListView;
use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'Афиша';
 ?>
<div class="site-index">
    <div class="row">
        <div class="col-md-12">
            <div class="body-content">
                
                <div class="row">
                    <?php 

                        echo ListView::widget([
                                'dataProvider' => $listDataProvider,
                                'itemView' => '_blocPost',
                                'emptyText' => 'Простите но на данный момент событий нет',
                            ]);

                     ?>
                </div>

            </div>
        </div>
    </div>
</div>