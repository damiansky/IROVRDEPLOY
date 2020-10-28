<?php

use yii\db\Migration;

/**
 * Class m201028_180329_projects_tables
 */
class m201028_180329_projects_tables extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {      
        $this->createTable('projects_table', [
            'id' => $this->primaryKey(),
            'column_id' => $this->integer()->notNull(),
            'name' => $this->string()->notNull(),
            'dynamic_page' => $this->integer(),
            'thumbnail' => $this->integer(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('projects_table');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201028_180329_projects_tables cannot be reverted.\n";

        return false;
    }
    */
}
