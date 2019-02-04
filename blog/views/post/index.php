<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<div class="post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
            'content:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>