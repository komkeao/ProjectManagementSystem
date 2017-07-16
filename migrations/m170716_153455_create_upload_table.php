<?php

use yii\db\Migration;

/**
 * Handles the creation of table `upload`.
 */
class m170716_153455_create_upload_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('upload', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'content' => $this->text(),
            'image' => $this->string(),
            'files' => $this->string(),
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
        $this->dropTable('upload');
    }
}
