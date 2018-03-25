<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "categoryes".
 *
 * @property int $id
 * @property string $category
 * @property string $alias
 *
 * @property Films[] $films
 * @property Films[] $films0
 */
class Categoryes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categoryes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category', 'alias'], 'required'],
            [['category', 'alias'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category' => 'Category',
            'alias' => 'Alias',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Films::className(), ['id_category' => 'category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms0()
    {
        return $this->hasMany(Films::className(), ['id_alias' => 'alias']);
    }

    public function getAll()
    {
        return Categoryes::find()->all();
    }

    
}
