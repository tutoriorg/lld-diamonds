<?php

namespace backend\modules\settings\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property integer $id
 * @property string $site_name
 * @property string $site_email
 * @property string $site_phone
 * @property string $inport_file_url
 * @property string $import_images_url
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['site_name', 'site_email', 'site_phone', 'inport_file_url', 'import_images_url'], 'required'],
            [['site_name', 'site_email', 'site_phone', 'inport_file_url', 'import_images_url'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'site_name' => 'Site Name',
            'site_email' => 'Site Email',
            'site_phone' => 'Site Phone',
            'inport_file_url' => 'Inport File Url',
            'import_images_url' => 'Import Images Url',
        ];
    }
}
