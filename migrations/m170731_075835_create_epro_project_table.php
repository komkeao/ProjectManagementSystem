<?php

use yii\db\Migration;

/**
 * Handles the creation of table `epro_project`.
 */
class m170731_075835_create_epro_project_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('epro_project', [
            'id' => $this->primaryKey(),
            'name_th'=>$this->string()->notNull(),
            'name_en'=>$this->string()->notNull(),
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('epro_project');
    }
}
