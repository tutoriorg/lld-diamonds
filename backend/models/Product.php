<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Product".
 *
 * @property integer $product_id
 * @property string $product_image
 * @property string $product_name
 * @property string $product_discription
 */
class Product extends \yii\db\ActiveRecord
{
    public $file;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_image', 'product_name'], 'required'],
            [['product_discription'], 'string'],
            [['product_image'],'file'],
            [['product_image', 'product_name'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_image' => 'Product Image',
            'product_name' => 'Product Name',
            'product_discription' => 'Product Discription',
        ];
    }
}
