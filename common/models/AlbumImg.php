<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "album_img".
 *
 * @property int $id
 * @property int $album_id
 * @property string $img
 */
class AlbumImg extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'album_img';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['album_id', 'img'], 'required'],
            [['album_id'], 'integer'],
            [['img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'album_id' => 'Album ID',
            'img' => 'Img',
        ];
    }
}
