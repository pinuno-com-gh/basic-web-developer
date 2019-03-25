<?php

namespace app\controllers;

use Yii;
use app\models\Post;
use app\models\PostSearch;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;



/**
 * PostController implements the CRUD actions for Post model.
 */
class PostController extends Controller


{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
		
			'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['create', 'delete', 'update', ''],
                'rules' => [
				
				
						[
                        'actions' => ['create','delete', 'update', ''],
                        'allow' => false,
                        'roles' => ['?'],
                    ],
					
                    [
                        'actions' => ['create','delete', 'update', ''],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
		
		
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Post models.
     * @return mixed
     */
    public function actionIndex()
    {
//<<<<<<< HEAD

		$searchModel = new PostSearch();
		
		$dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		return $this->render('index',  [
            'searchModel' => $searchModel,
			'dataProvider' => $dataProvider,
        ]);
		
       /** For references
	   
			$dataProvider = new ActiveDataProvider([
=======
		$dataProvider = new ActiveDataProvider([
>>>>>>> be2d398902de6bbeb853403689f4f9a6a7e3c425
            'query' => Post::find(),
	    	'sort'=> ['defaultOrder' => ['create_time'=>SORT_DESC]]
		]);
		$searchModel = new PostSearch();
		$dataProvider = $searchModel->search(Yii::$app->request->get());
        return $this->render('index',  [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);**/
	}

		

    /**
     * Displays a single Post model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Post model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
            
        $model = new Post();
        if ($model->load(Yii::$app->request->post())) {
			$model->author_id = \Yii::$app->user->id;
			if($model->save()){
				return $this->redirect(['view', 'id' => $model->id]);
			}       
           
        }
 
			
			
		// For references
       // if ($model->load(Yii::$app->request->post()) && $model->save()) {
       //     return $this->redirect(['view', 'id' => $model->author_id]);
      //  }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Post model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Post model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Post model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Post the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Post::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
