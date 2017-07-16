<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "document".
 *
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property integer $crby
 * @property integer $udby
 * @property string $crtime
 * @property string $udtime
 */
class Document extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'document';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'path'], 'required'],
            [['crby', 'udby'], 'integer'],
            [['crtime', 'udtime'], 'safe'],
            [['name', 'path'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'path' => 'Path',
            'crby' => 'Crby',
            'udby' => 'Udby',
            'crtime' => 'Crtime',
            'udtime' => 'Udtime',
        ];
    }
}
