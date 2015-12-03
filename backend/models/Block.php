<?php

namespace backend\models;



use Yii;
use sadovojav\cutter\behaviors\CutterBehavior;


/**
 * This is the model class for table "block".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $image
 */
class Block extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public static function tableName()
    {
        return 'block';
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
            [['title', 'content'], 'required'],
            [['content'], 'string'],

            ['image', 'file', 'extensions' => 'jpg, jpeg, png', 'mimeTypes' => 'image/jpeg, image/png'],

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
            'title' => 'Title',
            'content' => 'Content',
            'image' => 'Image',
        ];
    }
}
