<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->registerJsFile('https://unpkg.com/stackedit-js@1.0.7/docs/lib/stackedit.min.js');
$this->registerJsFile('http://js.nicedit.com/nicEdit-latest.js');
/* @var $this yii\web\View */
/* @var $model app\models\post */
/* @var $form yii\widgets\ActiveForm */

$js = <<<JS
    new nicEditor({fullPanel : true}).panelInstance('content_editor');

    const _editor = document.querySelector('#content_editor');
    const stackedit = new Stackedit();
    // Listen to StackEdit events and apply the changes to the textarea.
        
    stackedit.on('fileChange', (file) => {
      //_editor.value = file.content.html;
      nicEditors.findEditor('content_editor').setContent(file.content.html);
    });        
        
    $('#edit_markdown').on('click', function(e) {
        e.preventDefault;
        e.stopPropagation();
        
        // Open the iframe
        stackedit.openFile({
          name: 'Filename', // with an optional filename
          content: {
            //text: _editor.value // and the Markdown content.
            text: nicEditors.findEditor('content_editor').getContent()
          }
        });
    });
JS;
$this->registerJs($js, 4, 'content_editor');

?>

<div class="post-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Body')->textarea(['rows' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
