<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property integer $id
 * @property string $name
 * @property string $shape
 * @property string $color
 * @property string $clarity
 * @property string $lab
 * @property string $cert
 * @property double $langth
 * @property double $weight
 * @property double $height
 * @property double $depth
 * @property double $table_lld
 * @property double $polish
 * @property string $sym
 * @property string $flour
 * @property string $cut
 * @property double $cost_parcent
 * @property double $cost
 * @property double $rap_parcent
 * @property double $sale_prise
 * @property string $remark
 * @property string $culet
 * @property string $girdle
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
            [['name', 'shape', 'color', 'clarity', 'lab', 'cert', 'langth', 'weight', 'height', 'depth', 'table_lld', 'polish', 'sym', 'flour', 'cut', 'cost_parcent', 'cost', 'rap_parcent', 'sale_prise', 'remark', 'culet', 'girdle'], 'required'],
            [['langth', 'weight', 'height', 'depth', 'table_lld', 'polish', 'cost_parcent', 'cost', 'rap_parcent', 'sale_prise'], 'number'],
            [['name', 'shape', 'color', 'clarity', 'lab', 'sym', 'flour', 'cut', 'remark', 'culet', 'girdle'], 'string', 'max' => 100],
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
            'name' => 'Name',
            'shape' => 'Shape',
            'color' => 'Color',
            'clarity' => 'Clarity',
            'lab' => 'Lab',
            'cert' => 'Cert',
            'langth' => 'Langth',
            'weight' => 'Weight',
            'height' => 'Height',
            'depth' => 'Depth',
            'table_lld' => 'Table Lld',
            'polish' => 'Polish',
            'sym' => 'Sym',
            'flour' => 'Flour',
            'cut' => 'Cut',
            'cost_parcent' => 'Cost Parcent',
            'cost' => 'Cost',
            'rap_parcent' => 'Rap Parcent',
            'sale_prise' => 'Sale Prise',
            'remark' => 'Remark',
            'culet' => 'Culet',
            'girdle' => 'Girdle',
        ];
    }
}
