<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%instvd}}`.
 */
class m210213_234437_create_instvd_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%instvd}}', [
            'id' => $this->primaryKey(),
            'Number_posts'=>$this->integer(),//Количество постов
            'Number_pictures'=>$this->integer(),//Количество картинок
            'Number_stories' =>$this->integer(),//Количество историй
            'Average_rate'=>$this->integer(),//Средний показатель охвата
            'Average_saves'=>$this->integer(),//Среднее количество сохранений
            'Average_likes'=>$this->integer(),//Среднее количество лайков
            'Number_subscribers'=>$this->integer(),//Количество подписчиков
            'Number_comments'=>$this->integer(),//Количество комментариев
            'Number_responses'=>$this->integer(),//Количество ответов
            'Number_applications'=>$this->integer()//Количество заявок
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%instvd}}');
    }
}
