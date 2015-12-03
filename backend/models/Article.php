<?php

namespace backend\models;

use Yii;
use sadovojav\cutter\behaviors\CutterBehavior;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $title
 * @property string $short_content
 * @property string $content
 * @property string $image
 * @property string $created
 * @property string $updated
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'article';
    }
    public function behaviors()
    {
        return [
            'image' => [
                'class' => CutterBehavior::className(),
                'attribute' => 'image',
                'baseDir' => '/uploads/crop',
                'basePath' => '@webroot',
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'short_content', 'content'], 'required'],
            [['user_id'], 'integer'],
            [['short_content', 'content'], 'string'],


            ['image', 'file', 'extensions' => 'jpg, jpeg, png', 'mimeTypes' => 'image/jpeg, image/png'],
            [['created', 'updated'], 'safe'],
            [['title'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'title' => 'Title',
            'short_content' => 'Short Content',
            'content' => 'Content',
            'image' => 'Image',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }

    public function beforeSave($model)
    {
        if ($this->isNewRecord)
        {
            $this->created = date('Y-m-d H:i:s');
        }

        $this->updated = date('Y-m-d H:i:s');

        return parent::beforeSave($model);
    }
}
