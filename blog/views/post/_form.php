<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Tag;
use app\models\Lookup;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model app\models\Post */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'tags')->DropDownlist(ArrayHelper::map(tag::find()->all(), 'name', 'name')) ?>

    <?= $form->field($model, 'status')->DropDownlist(ArrayHelper::map(lookup::find()->all(),'name','name')) ?>

    <?= $form->field($model, 'create_time')->textInput() ?>

    <?= $form->field($model, 'update_time')->textInput() ?>

    <?= $form->field($model, 'author_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>