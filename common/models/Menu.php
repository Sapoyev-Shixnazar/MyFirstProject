<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "menu".
 *
 * @property int $id
 * @property string $type
 * @property int $parent
 * @property string $name_uz
 * @property string $name_ru
 * @property string $name_en
 * @property string $url
 * @property string $order_by
 * @property int $status
 */
class Menu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type', 'parent', 'name_uz', 'name_ru', 'name_en', 'url', 'order_by', 'status'], 'required'],
            [['parent', 'status'], 'integer'],
            [['type', 'name_uz', 'name_ru', 'name_en', 'url', 'order_by'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
            'parent' => 'Parent',
            'name_uz' => 'Name Uz',
            'name_ru' => 'Name Ru',
            'name_en' => 'Name En',
            'url' => 'Url',
            'order_by' => 'Order By',
            'status' => 'Status',
        ];
    }
}
