<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $ref
 * @property string $shape
 * @property double $weight
 * @property string $color
 * @property string $clarity
 * @property string $cut
 * @property string $pol
 * @property string $symm
 * @property string $fluo
 * @property integer $rap_list
 * @property integer $rap
 * @property double $price_crt
 * @property string $cert
 * @property string $details
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ref', 'shape', 'weight', 'color', 'clarity', 'cut', 'pol', 'symm', 'fluo', 'rap_list', 'rap', 'price_crt', 'cert', 'details'], 'required'],
            [['weight', 'price_crt'], 'number'],
            [['rap_list', 'rap'], 'integer'],
            [['ref', 'shape', 'color', 'clarity', 'cut', 'pol', 'symm', 'fluo', 'details'], 'string', 'max' => 100],
            [['cert'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ref' => 'Ref',
            'shape' => 'Shape',
            'weight' => 'Weight',
            'color' => 'Color',
            'clarity' => 'Clarity',
            'cut' => 'Cut',
            'pol' => 'Pol',
            'symm' => 'Symm',
            'fluo' => 'Fluo',
            'rap_list' => 'Rap List',
            'rap' => 'Rap',
            'price_crt' => 'Price Crt',
            'cert' => 'Cert',
            'details' => 'Details',
        ];
    }
}
