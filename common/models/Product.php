<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\StringHelper;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $sku
 * @property string|null $description
 * @property int|null $category_id
 * @property float $price
 * @property float|null $old_price
 * @property int $quantity
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 */
class Product extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::class,
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => time(),
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description', 'category_id', 'old_price'], 'default', 'value' => null],
            [['price'], 'default', 'value' => 0.00],
            [['quantity'], 'default', 'value' => 0],
            [['status'], 'default', 'value' => 1],
            [['name', 'slug', 'sku'], 'required'],
            [['description'], 'string'],
            [['category_id', 'quantity', 'status', 'created_at', 'updated_at'], 'integer'],
            [['price', 'old_price'], 'number'],
            [['name', 'slug'], 'string', 'max' => 255],
            [['sku'], 'string', 'max' => 100],
            [['slug'], 'unique'],
            [['sku'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'slug' => 'Slug',
            'sku' => 'Sku',
            'description' => 'Description',
            'category_id' => 'Category ID',
            'price' => 'Price',
            'old_price' => 'Old Price',
            'quantity' => 'Quantity',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getShortDescription()
    {
        if ($this->description) {
            return StringHelper::truncate(
                $this->description,
                20
            );
        }else{
            return 'Описание отсутствует.';
        }
    }
}
