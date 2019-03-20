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
            [['title', 'content' /**'status',**/ ], 'required'],
            [['content'], 'string'],
            [[/**'create_time',**/ 'title',  'content', /**'author_id',**/ 'tags' /**'update_time'**/], 'safe'],
            [['title', 'tags', /**'status' 'author_id'**/], 'string', 'max' => 128],
     
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
        $query = Post::find();//->where(['tags'=>$params]);		
		$query->joinWith(['tags']);		
        $dataProvider = new ActiveDataProvider([		
            'query' => $query,			
			'sort' => ['defaultOrder' =>['create_time' => SORT_DESC]],			
        ]);
        $query->andFilterWhere([
          'title' => $this->title,
		  'content' => $this->content,
		  'tags' => $this->tags,
        ]);
        $query->andFilterWhere(['like', 'title', $this->title]);   
		$query->andFilterWhere(['like', 'content', $this->content]);
		$query->andFilterWhere(['like', 'tags', $this->tags]);       
        
        return $dataProvider;
    }
	
/**
 * @return \yii\db\ActiveQuery
 **/
public function getTags()
{
    return $this->hasOne(Tag::className(), ['id' => 'id']);
}

/**
 * @return \yii\db\ActiveQuery
 
public function getCity()
{
    return $this->hasOne(City::className(), ['id' => 'city_id']);
} */
}

