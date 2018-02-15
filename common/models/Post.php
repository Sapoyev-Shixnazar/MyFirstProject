<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property int $category_id
 * @property string $title_uz
 * @property string $title_ru
 * @property string $title_en
 * @property string $content_uz
 * @property string $content_ru
 * @property string $content_en
 * @property string $description_uz
 * @property string $description_ru
 * @property string $description_en
 * @property int $seen
 * @property string $create_at
 * @property string $img
 * @property int $status
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id', 'title_uz', 'title_ru', 'title_en', 'content_uz', 'content_ru', 'content_en', 'description_uz', 'description_ru', 'description_en', 'create_at', 'img', 'status'], 'required'],
            [['category_id', 'seen', 'status'], 'integer'],
            [['create_at'], 'safe'],
            [['title_uz', 'title_ru', 'title_en', 'content_uz', 'content_ru', 'content_en', 'description_uz', 'description_ru', 'description_en', 'img'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'title_uz' => 'Title Uz',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'content_uz' => 'Content Uz',
            'content_ru' => 'Content Ru',
            'content_en' => 'Content En',
            'description_uz' => 'Description Uz',
            'description_ru' => 'Description Ru',
            'description_en' => 'Description En',
            'seen' => 'Seen',
            'create_at' => 'Create At',
            'img' => 'Img',
            'status' => 'Status',
        ];
    }
}
