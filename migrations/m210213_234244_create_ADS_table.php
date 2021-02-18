<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%ADS}}`.
 */
class m210213_234244_create_ADS_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%ADS}}', [
            'id' => $this->primaryKey(),
            'id_ADS_user'=>$this->integer(),
            'id_vk_target'=>$this->integer(),
            'id_ok_target'=>$this->integer(),
            'id_inst_target'=>$this->integer(),
            'id_yandex'=>$this->integer(),
            'id_google'=>$this->integer(),
            'id_youtube'=>$this->integer()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%ADS}}');
    }
}
