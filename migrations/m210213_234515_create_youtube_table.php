<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%youtube}}`.
 */
class m210213_234515_create_youtube_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%youtube}}', [
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
        $this->dropTable('{{%youtube}}');
    }
}
