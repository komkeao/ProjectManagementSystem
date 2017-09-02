<?php

namespace app\modules\eproject\models;

use Yii;

/**
 * This is the model class for table "epro_news".
 *
 * @property integer $id
 * @property string $title
 * @property string $details
 * @property integer $crby
 * @property integer $udby
 * @property string $crtime
 * @property string $udtime
 * @property integer $status_id
 *
 * @property EproNewsStatus $status
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'epro_news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'details', 'status_id'], 'required'],
            [['details'], 'string'],
            [['crby', 'udby', 'status_id'], 'integer'],
            [['crtime', 'udtime'], 'safe'],
            [['title'], 'string', 'max' => 50],
            [['status_id'], 'exist', 'skipOnError' => true, 'targetClass' => NewsStatus::className(), 'targetAttribute' => ['status_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'หัวข้อ',
            'details' => 'เนื้อหา',
            'crby' => 'สรา้งโดย',
            'udby' => 'แก้ไขโดย',
            'crtime' => 'สร้างเมื่อ',
            'udtime' => 'แก้ไขเมื่อ',
            'status_id' => 'Status ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNewsStatus()
    {
        return $this->hasOne(NewsStatus::className(), ['id' => 'status_id']);
    }
}
