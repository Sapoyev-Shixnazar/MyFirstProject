<?php

use yii\db\Migration;

/**
 * Handles the creation of table `post`.
 */
class m180215_134558_create_post_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('post', [
            'id' => $this->primaryKey(),
            'category_id'=>$this->integer()->notNull(),
            'title_uz'=>$this->string()->notNull(),
            'title_ru'=>$this->string()->notNull(),
            'title_en'=>$this->string()->notNull(),
            'content_uz'=>$this->string()->notNull(),
            'content_ru'=>$this->string()->notNull(),
            'content_en'=>$this->string()->notNull(),
            'description_uz'=>$this->string()->notNull(),
            'description_ru'=>$this->string()->notNull(),
            'description_en'=>$this->string()->notNull(),
            'seen'=>$this->integer(),
            'create_at'=>$this->date()->notNull(),
            'img'=>$this->string()->notNull(),
            'status'=>$this->integer(1)->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('post');
    }
}
