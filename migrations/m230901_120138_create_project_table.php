<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%project}}`.
 */
class m230901_120138_create_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        // $this->createTable('{{%project}}', [
        //     'id' => $this->primaryKey(),
        //     'name' => $this->string(100),
        //     'mobile_no' => $this->number(11),
        //     'month' => $this->string(100),
        //     'year' => $this->string(100),
        //     'salary_credited' => $this->number(),
        //     'paid_for_days' => $this->string(100),
        // ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%project}}');
    }
}
