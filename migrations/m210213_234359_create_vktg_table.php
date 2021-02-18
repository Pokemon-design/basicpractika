<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%vktg}}`.
 */
class m210213_234359_create_vktg_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%vktg}}', [
            'id' => $this->primaryKey(),
            'id_conducting'=>$this->integer(),
            'Impressions'=>$this->integer(),
            'Transitions'=>$this->integer(),
            'CTR'=>$this->integer(),
            'Amount_spent'=>$this->integer(),
            'Click_cost'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%vktg}}');
    }
}
