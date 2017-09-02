<?php

namespace app\modules\eproject;

/**
 * eproject module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\eproject\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        $this->layout="main";

        // custom initialization code goes here
    }
}
