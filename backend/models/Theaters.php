<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "theaters".
 *
 * @property int $id
 * @property string $theater
 * @property string $location
 *
 * @property Films[] $films
 */
class Theaters extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'theaters';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['theater', 'location'], 'required'],
            [['theater', 'location'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'theater' => 'Theater',
            'location' => 'Location',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilms()
    {
        return $this->hasMany(Films::className(), ['id_theater' => 'theater']);
    }
}
