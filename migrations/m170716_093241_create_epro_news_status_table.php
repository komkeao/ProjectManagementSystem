<?php

use yii\db\Migration;

/**
 * Handles the creation of table `epro_news_status`.
 */
class m170716_093241_create_epro_news_status_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('epro_news_status', [
            'id' => $this->primaryKey(),
            'desc'=> $this->string(25)->notNull(),
            'crby'=> $this->integer()->notNull(),
            'udby'=> $this->integer()->notNull(),
            'crtime'=> $this->dateTime()->notNull(),
            'udtime'=> $this->dateTime()->notNull(),
        ]);

        //Initial Data
        $this->initData();
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('epro_news_status');
    }
    private function initData(){
        $this->insert('epro_news_status', [
            'desc'=> 'รอการอนุมัติ',
            'crby'=> 0,
            'udby'=> 0,
            'crtime'=> date('Y-m-d H:i:s'),
            'udtime'=> date('Y-m-d H:i:s'),
        ]);
        $this->insert('epro_news_status', [
            'desc'=> 'อนุมัติแล้ว',
            'crby'=> 0,
            'udby'=> 0,
            'crtime'=> date('Y-m-d H:i:s'),
            'udtime'=> date('Y-m-d H:i:s'),
        ]);
        $this->insert('epro_news_status', [
            'desc'=> 'ไม่อนุมัติ',
            'crby'=> 0,
            'udby'=> 0,
            'crtime'=> date('Y-m-d H:i:s'),
            'udtime'=> date('Y-m-d H:i:s'),
        ]);
        $this->insert('epro_news_status', [
            'desc'=> 'รอแก้ไข',
            'crby'=> 0,
            'udby'=> 0,
            'crtime'=> date('Y-m-d H:i:s'),
            'udtime'=> date('Y-m-d H:i:s'),
        ]);
    }
}
