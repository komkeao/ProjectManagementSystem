<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "epro_news_status".
 *
 * @property integer $id
 * @property string $desc
 *
 * @property EproNews[] $eproNews
 */
class NewsStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'epro_news_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['desc'], 'required'],
            [['desc'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'desc' => 'Desc',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEproNews()
    {
        return $this->hasMany(News::className(), ['status_id' => 'id']);
    }
}
