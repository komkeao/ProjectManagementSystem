<?php

use yii\db\Migration;

/**
 * Handles the creation of table `epro_download`.
 */
class m170717_044126_create_epro_download_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('epro_download', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'file' => $this->string(),
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
        $this->dropTable('epro_download');
    }
}
