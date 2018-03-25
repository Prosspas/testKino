<?php

namespace frontend\controllers;

use frontend\models\News;
use yii\data\ActiveDataProvider;
use frontend\models\Films;
use Yii;

class NewsController extends \yii\web\Controller
{
    public function actionIndex()
    {

    	$news = new News();
        $getnews = $news->getAll();
        $dataProvider = new ActiveDataProvider([
            'query' => News::find(),
            'pagination' => [
                'pagesize' => 2,
            ]
        ]);
        return $this->render('index',[
                'listDataProvider' => $dataProvider,
                'getnews' => $getnews,
            ]);
    }

     public function actionView($id)
    {
        $id = Yii::$app->request->get('id');
        $singleNews = Films::findOne($id);
        if(empty($singleNews)) throw new \yii\web\HttpException(404, 'Page Not Found!');
        return $this->render('view',compact('singleNews'));
    }

}
