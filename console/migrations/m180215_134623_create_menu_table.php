<?php

use yii\db\Migration;

/**
 * Handles the creation of table `menu`.
 */
class m180215_134623_create_menu_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('menu', [
            'id' => $this->primaryKey(),
            'type'=>$this->string()->notNull(),
            'parent'=>$this->integer()->notNull(),
            'name_uz'=>$this->string()->notNull(),
            'name_ru'=>$this->string()->notNull(),
            'name_en'=>$this->string()->notNull(),
            'url'=>$this->string()->notNull(),
            'order_by'=>$this->string()->notNull(),
            'status'=>$this->integer(1)->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('menu');
    }
}
