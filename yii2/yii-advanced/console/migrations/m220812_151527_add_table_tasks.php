<?php

use yii\db\Migration;

/**
 * Class m220812_151527_add_table_tasks
 */
class m220812_151527_add_table_tasks extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%task}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'description' => $this->text(),
            'status' => "ENUM('new', 'inprogress', 'done')",
            'priority' => $this->tinyInteger()->defaultValue(1),
            'created' => $this->dateTime(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%task}}');

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220812_151527_add_table_tasks cannot be reverted.\n";

        return false;
    }
    */
}
