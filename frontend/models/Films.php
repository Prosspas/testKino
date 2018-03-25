<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "films".
 *
 * @property int $id
 * @property string $title
 * @property string $desk
 * @property string $text
 * @property string $id_alias
 * @property string $id_category
 * @property string $id_theater
 * @property string $data_out
 * @property string $budget
 * @property string $author
 *
 * @property Categoryes $category
 * @property Theaters $theater
 * @property Categoryes $alias
 */
class Films extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'films';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'desk', 'text', 'id_alias', 'id_category', 'id_theater', 'data_out', 'budget', 'author'], 'required'],
            [['text'], 'string'],
            [['data_out'], 'safe'],
            [['title', 'desk', 'id_alias', 'id_category', 'id_theater', 'budget', 'author'], 'string', 'max' => 255],
            [['id_category'], 'exist', 'skipOnError' => true, 'targetClass' => Categoryes::className(), 'targetAttribute' => ['id_category' => 'category']],
            [['id_theater'], 'exist', 'skipOnError' => true, 'targetClass' => Theaters::className(), 'targetAttribute' => ['id_theater' => 'theater']],
            [['id_alias'], 'exist', 'skipOnError' => true, 'targetClass' => Categoryes::className(), 'targetAttribute' => ['id_alias' => 'alias']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'desk' => 'Desk',
            'text' => 'Text',
            'id_alias' => 'Id Alias',
            'id_category' => 'Id Category',
            'id_theater' => 'Id Theater',
            'data_out' => 'Data Out',
            'budget' => 'Budget',
            'author' => 'Author',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categoryes::className(), ['category' => 'id_category']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTheater()
    {
        return $this->hasOne(Theaters::className(), ['theater' => 'id_theater']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlias()
    {
        return $this->hasOne(Categoryes::className(), ['alias' => 'id_alias']);
    }
}
