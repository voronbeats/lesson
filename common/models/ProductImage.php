<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_image".
 *
 * @property int $id
 * @property int $product_id
 * @property string $image
 * @property int $sort_order
 * @property int $is_main
 */
class ProductImage extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['is_main'], 'default', 'value' => 0],
            [['product_id', 'image'], 'required'],
            [['product_id', 'sort_order', 'is_main'], 'integer'],
            [['image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'image' => 'Image',
            'sort_order' => 'Sort Order',
            'is_main' => 'Is Main',
        ];
    }

}
