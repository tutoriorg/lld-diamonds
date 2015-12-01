<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ref')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shape')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clarity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'symm')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fluo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rap_list')->textInput() ?>

    <?= $form->field($model, 'rap')->textInput() ?>

    <?= $form->field($model, 'price_crt')->textInput() ?>

    <?= $form->field($model, 'cert')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'details')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
