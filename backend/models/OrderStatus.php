<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "order_status".
 *
 * @property integer $id
 * @property string $code
 * @property string $lable
 */
class OrderStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'order_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['code', 'lable'], 'required'],
            [['code', 'lable'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'code' => 'Code',
            'lable' => 'Lable',
        ];
    }
}
