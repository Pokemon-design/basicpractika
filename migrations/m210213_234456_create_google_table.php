<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%google}}`.
 */
class m210213_234456_create_google_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%google}}', [
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
        $this->dropTable('{{%google}}');
    }
}
