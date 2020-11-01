<?php

use yii\db\Migration;

/**
 * Class m201030_200139_project_table
 */
class m201030_200139_project_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {      
        $this->addColumn('projects_table', 'small_image', $this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropColumn('projects_table', 'small_image');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m201030_200139_project_table cannot be reverted.\n";

        return false;
    }
    */
}
