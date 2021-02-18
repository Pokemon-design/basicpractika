<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%yandex}}`.
 */
class m210213_234448_create_yandex_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%yandex}}', [
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
        $this->dropTable('{{%yandex}}');
    }
}
