<?php
namespace app\controllers;

use Yii;
use app\models\Post;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class TagController extends \yii\web\Controller
{
  /**  public function actionIndex()
{
    $model = new \app\models\Tag();

    if ($model->load(Yii::$app->request->post())) {
        if ($model->validate()) {
            // form inputs are valid, do something here
            return;
        }
    }

}
return $this->render('index', [
        'model' => $model,
    ]);
	
	**/
	
	public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Post::find(),
			'sort'=> ['defaultOrder' => ['create_time'=>SORT_DESC]]
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
}
