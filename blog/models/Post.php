<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "post".
 *
 * @property string $Title
 * @property string $Body
 */
class Post extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'post';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Title', 'Body'], 'required'],
            [['Body'], 'string'],
            [['Title'], 'string', 'max' => 255],
            [['Title'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'Title' => 'Title',
            'Body' => 'Body',
        ];
    }
	
	
}
