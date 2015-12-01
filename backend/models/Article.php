<?php

namespace backend\models;

use Yii;

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

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'title', 'short_content', 'content', 'image', 'created', 'updated'], 'required'],
            [['user_id'], 'integer'],
            [['short_content', 'content'], 'string'],
            [['created', 'updated'], 'safe'],
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
            'user_id' => 'User ID',
            'title' => 'Title',
            'short_content' => 'Short Content',
            'content' => 'Content',
            'image' => 'Image',
            'created' => 'Created',
            'updated' => 'Updated',
        ];
    }
}
