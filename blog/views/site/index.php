<?php

/* @var $this yii\web\View */
/* @var $this yii\grid\GridView */

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

?>
<div class="post-create">
    <?php echo GridView::widget([
            'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],        
                    'title',
                    'tags',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
        ]); 
    ?>
</div>