<?php

namespace app\models;

use Yii;
use yii\data\ActiveDataProvider;


/**
 * This is the model class for table "post".
 *
 * @property int $id
 * @property string $title
 * @property string $image
 * @property string $content
 * @property string $tags
 * @property string $status
 * @property string $create_time
 * @property string $update_time
 * @property string $author_id
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
            [['title', 'content', 'tags', 'status', 'author_id'], 'required'],
            [['content'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['title', 'tags', 'status', 'author_id'], 'string', 'max' => 128],
            [['image'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'image' => 'Image',
            'content' => 'Content',
            'tags' => 'Tags',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
            'author_id' => 'Author ID',
        ];
    }
	public function search($params)
    {
        $query = post::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $query->andFilterWhere([
          'id' => $this->id,
		  'id' => $this->id,
        ]);

        if (isset($_GET['SearchModelClassName']) && !($this->load($params) && $this->validate())) {
    return $dataProvider;
	}

        $query->andFilterWhere([
            'id' => $this->id,
		    'id' => $this->id,
        ]);

        $query->andFilterWhere([
		
	    'tags' => $this->tags,
		'tags' => $this->tags,
		
		
		]);

        return $dataProvider;
    }
}

