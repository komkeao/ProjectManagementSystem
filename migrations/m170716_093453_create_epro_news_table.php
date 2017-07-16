<?php

use yii\db\Migration;

/**
 * Handles the creation of table `epro_news`.
 */
class m170716_093453_create_epro_news_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('epro_news', [
            'id' => $this->primaryKey(),
            'title'=>$this->string(50),
            'details'=>$this->text(),
            'crby'=> $this->integer()->notNull(),
            'udby'=> $this->integer()->notNull(),
            'crtime'=> $this->dateTime()->notNull(),
            'udtime'=> $this->dateTime()->notNull(),
            'status_id'=>$this->integer()->notNull(),
        ]);

        $this->addForeignKey(
            'fk-post-author_id',
            'epro_news',
            'status_id',
            'epro_news_status',
            'id',
            'CASCADE'
        );

    }

    /**
     * @inheritdoc
     */
    public function down()
    {

        $this->dropTable('epro_news');
    }
}
