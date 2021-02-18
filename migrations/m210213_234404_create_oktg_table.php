<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%oktg}}`.
 */
class m210213_234404_create_oktg_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%oktg}}', [
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
        $this->dropTable('{{%oktg}}');
    }
}
