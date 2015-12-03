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
    public $file;
    public static function tableName()
    {
        return 'block';
    }



    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content', 'image'], 'required'],
            [['content'], 'string'],
            [['file'],'file'],

            [['title', 'image'], 'string', 'max' => 255]
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
