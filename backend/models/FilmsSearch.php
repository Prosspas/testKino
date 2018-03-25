<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Films;

/**
 * FilmsSearch represents the model behind the search form of `backend\models\Films`.
 */
class FilmsSearch extends Films
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'desk', 'text', 'id_alias', 'id_category', 'id_theater', 'data_out', 'budget', 'author'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Films::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'data_out' => $this->data_out,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'desk', $this->desk])
            ->andFilterWhere(['like', 'text', $this->text])
            ->andFilterWhere(['like', 'id_alias', $this->id_alias])
            ->andFilterWhere(['like', 'id_category', $this->id_category])
            ->andFilterWhere(['like', 'id_theater', $this->id_theater])
            ->andFilterWhere(['like', 'budget', $this->budget])
            ->andFilterWhere(['like', 'author', $this->author]);

        return $dataProvider;
    }
}
