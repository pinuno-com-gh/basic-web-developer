<!DOCTYPE html>

<html>
<head>  <title>Posts</title>
</head>
<body>




<?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'comment',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


	
</body>

</html>