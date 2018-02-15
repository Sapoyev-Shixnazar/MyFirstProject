<?php

use yii\db\Migration;

/**
 * Handles the creation of table `category`.
 */
class m180215_134540_create_category_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('category', [
            'id' => $this->primaryKey(),
            'name_uz'=>$this->string()->notNull(),
            'name_ru'=>$this->string()->notNull(),
            'name_en'=>$this->string()->notNull(),
            'status'=>$this->integer(1)->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('category');
    }
}
