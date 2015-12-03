<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property integer $meta_id
 * @property string $title
 * @property string $content
 * @property string $created
 * @property string $updated
 * @property string $alias
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'content',  'alias'], 'required'],
            [['meta_id'], 'integer'],
            [['content'], 'string'],
            [['created', 'updated'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['alias'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meta_id' => 'Meta ID',
            'title' => 'Title',
            'content' => 'Content',
            'created' => 'Created',
            'updated' => 'Updated',
            'alias' => 'Alias',
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
