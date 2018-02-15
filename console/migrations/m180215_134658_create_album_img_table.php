<?php

use yii\db\Migration;

/**
 * Handles the creation of table `album_img`.
 */
class m180215_134658_create_album_img_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        $this->createTable('album_img', [
            'id' => $this->primaryKey(),
            'album_id'=>$this->integer()->notNull(),
            'img'=>$this->string()->notNull(),

        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        $this->dropTable('album_img');
    }
}
