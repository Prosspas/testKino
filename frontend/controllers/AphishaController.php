<?php

namespace frontend\controllers;

use frontend\models\Films;
use yii\data\ActiveDataProvider;

class AphishaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Films::find(),
            'pagination' => [
                'pagesize' => 3,
            ]
        ]);
        return $this->render('index',[
                'listDataProvider' => $dataProvider,
                'getCategoryes' => $getCategoryes,
            ]);
    }

}
