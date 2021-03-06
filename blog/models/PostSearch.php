<?php
namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class PostSearch extends Post
{
    public function rules()
    {
        // only fields in rules() are searchable
        return [
          //  [['id'], 'integer'],
            [['title', 'tags', 'content',], 'safe'],
        ];
    }
    
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
    
    public function search($params)
    {
        $query = Post::find();        
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        
        // load the search form data and validate
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        
        // adjust the query by adding the filters
        $query->andFilterWhere(['like', 'title', $this->title]);
        $query->andFilterWhere(['like', 'tags', $this->tags]);
		$query->andFilterWhere(['like', 'content', $this->content]);
        
        return $dataProvider;
    }
}