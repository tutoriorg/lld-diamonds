<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\tinymce\TinyMce;
/* @var $this yii\web\View */
/* @var $model backend\models\Meta */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meta-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'description')->widget(TinyMce::className(), [
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

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'route')->textInput(['maxlength' => true]) ?>





    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
