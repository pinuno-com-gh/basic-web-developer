<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tag;
use yii\helpers\ArrayHelper;
use yii\grid\GridView;


/* @var $this yii\web\View */
/* @var $model app\models\Tag */
/* @var $form ActiveForm */
$this->title = 'Tag';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        This is the Tag page. You may modify the following file to customize its content:
    </p>

    <code><?= __FILE__ ?></code>
</div>
?>
