<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "projects".
 *
 * @property integer $id
 * @property string $name
 * @property integer $project_type_id
 *
 * @property ProjectType $projectType
 */
class Projects extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'projects';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['project_type_id'], 'required'],
            [['project_type_id'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['project_type_id'], 'exist', 'skipOnError' => true, 'targetClass' => ProjectType::className(), 'targetAttribute' => ['project_type_id' => 'id']],
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
            'project_type_id' => 'Project Type ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProjectType()
    {
        return $this->hasOne(ProjectType::className(), ['id' => 'project_type_id']);
    }
}
