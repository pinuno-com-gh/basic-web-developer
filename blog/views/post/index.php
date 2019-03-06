<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Inflector;
use yii\grid\DataColumn;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class='PostIndex'>

    <h1><?= Html::encode($this->title) ?></h1>

  <!--  <p> For Reference
        <?= Html::a('Create Post', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
-->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
		'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
			[
				'attribute'=> 'tags',
				'value'=> 'tags:ntext',
			],
            'id',
            'title',
            'content:ntext',
            'tags:ntext',
            'status',
            'create_time:datetime',
            'update_time:datetime',
            'author_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</body>
</html>