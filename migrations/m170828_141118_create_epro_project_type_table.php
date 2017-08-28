<?php

use yii\db\Migration;

/**
 * Handles the creation of table `epro_project_type`.
 */
class m170828_141118_create_epro_project_type_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('epro_project_type', [
            'id' => $this->primaryKey(),
            'name'=>$this->string()->notNull(),
            'crby'=> $this->integer()->notNull(),
            'udby'=> $this->integer()->notNull(),
            'crtime'=> $this->dateTime()->notNull(),
            'udtime'=> $this->dateTime()->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('epro_project_type');
    }
}
