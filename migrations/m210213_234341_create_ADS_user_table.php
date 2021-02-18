<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ADS_user}}`.
 */
class m210213_234341_create_ADS_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ADS_user}}', [
            'id' => $this->primaryKey(),
            'id_user'=>$this->integer(),
            'id_ADS'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ADS_user}}');
    }
}
