<?php

use yii\db\Migration;

/**
 * Handles the creation of table `page`.
 */
class m180215_134611_create_page_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('page', [
            'id' => $this->primaryKey(),
            'title_uz'=>$this->string()->notNull(),
            'title_ru'=>$this->string()->notNull(),
            'title_en'=>$this->string()->notNull(),
            'content_uz'=>$this->text()->notNull(),
            'content_ru'=>$this->text()->notNull(),
            'content_en'=>$this->text()->notNull(),
            'create_at'=>$this->date()->notNull(),
            'status'=>$this->integer(1)->notNull()
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('page');
    }
}
