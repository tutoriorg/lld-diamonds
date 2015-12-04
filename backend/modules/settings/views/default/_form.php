<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\modules\settings\models\Settings */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="settings-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'site_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'site_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inport_file_url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'import_images_url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
