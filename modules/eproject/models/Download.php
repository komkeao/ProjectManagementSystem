<?php

namespace app\modules\eproject\models;

use Yii;

/**
 * This is the model class for table "epro_download".
 *
 * @property integer $id
 * @property string $title
 * @property string $path
 * @property integer $crby
 * @property integer $udby
 * @property string $crtime
 * @property string $udtime
 */
class Download extends \yii\db\ActiveRecord
{
    public $uploadFileFolder = 'uploads/downloads'; //ที่เก็บรูปภาพ
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'epro_download';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'crby', 'udby', 'crtime', 'udtime'], 'required'],
            [['crby', 'udby'], 'integer'],
            [['crtime', 'udtime'], 'safe'],
            [['title'], 'string', 'max' => 255],
            //checkExtensionByMimeType
            [['file'], 'file', 'extensions' => 'docx,doc,xls,xlsx,png,jpg,pdf,ppt,pptx','checkExtensionByMimeType'=>false],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'หัวเรื่อง',
            'file' => 'ไฟล์',
            'crby' => 'Crby',
            'udby' => 'Udby',
            'crtime' => 'Crtime',
            'udtime' => 'Udtime',
        ];
    }

    public function uploadFile()
    {
        if ($this->validate()) {
            if ($this->file) {
                if ($this->isNewRecord) {//ถ้าเป็นการเพิ่มใหม่ ให้ตั้งชื่อไฟล์ใหม่
                    $fileName = substr(md5(rand(1, 1000) . time()), 0, 10) .date('YmdHi'). '.' . $this->file->extension;//เลือกมา 15 อักษร .นามสกุล
                } else {//ถ้าเป็นการ update ให้ใช้ชื่อเดิม
                    $fileName = $this->getOldAttribute('file');
                }
                $this->file->saveAs(Yii::getAlias('@webroot') . '/' . $this->uploadFileFolder . '/' . $fileName);
                return $fileName;
            }//end file upload
        }//end validate
        return $this->isNewRecord ? false : $this->getOldAttribute('file'); //ถ้าไม่มีการ upload ให้ใช้ข้อมูลเดิม
    }
    public function getFilePath()
    {
        return Yii::getAlias('@web') . $this->uploadFileFolder . '/' . $this->file;
    }
}
