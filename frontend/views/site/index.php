<?php
use yii\widgets\ListView;
use yii\base\View;

$this->title = 'Фильмы';

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
