<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;

/* @var $this yii\web\View */
/* @var $model backend\models\Block */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="block-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data']]); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>



    <?= $form->field($model, 'content')->widget(TinyMce::className(), [
        'options' => ['rows' => 6],

        'clientOptions' => [
            'plugins' => [
                "advlist autolink lists link charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        ]
    ]);?>

    <?php if ($model->image): ?>
        <img src="<?php echo Url::base(true).'/'.$model->image ?>" alt="" style="width: 200px; height: auto">

    <?php endif; ?>


    <?= $form->field($model, 'file')->widget(\dosamigos\fileinput\BootstrapFileInput::className(), [
        'options' => ['accept' => 'upload/*', 'multiple' => true],
        'clientOptions' => [
            'previewFileType' => 'image',
            'browseClass' => 'btn btn-success',
            'uploadClass' => 'btn btn-info',
            'removeClass' => 'btn btn-danger',
            'removeIcon' => '<i class="glyphicon glyphicon-trash"></i> '
        ]
    ]);?>




    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
