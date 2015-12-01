<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "sale".
 *
 * @property integer $id
 * @property integer $status_id
 * @property string $name
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property integer $phone
 * @property string $company
 * @property integer $qty
 * @property integer $total_price
 */
class Sale extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sale';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_id', 'name', 'first_name', 'last_name', 'email', 'phone', 'company', 'qty', 'total_price'], 'required'],
            [['status_id', 'phone', 'qty', 'total_price'], 'integer'],
            [['name', 'first_name', 'last_name', 'company'], 'string', 'max' => 255],
            [['email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_id' => 'Status ID',
            'name' => 'Name',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'company' => 'Company',
            'qty' => 'Qty',
            'total_price' => 'Total Price',
        ];
    }
}
