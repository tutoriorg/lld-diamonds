<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductOrder */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'order_lld_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shape')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'clarity')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lab')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cert')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'langth')->textInput() ?>

    <?= $form->field($model, 'weight')->textInput() ?>

    <?= $form->field($model, 'height')->textInput() ?>

    <?= $form->field($model, 'depth')->textInput() ?>

    <?= $form->field($model, 'table_lld')->textInput() ?>

    <?= $form->field($model, 'polish')->textInput() ?>

    <?= $form->field($model, 'sym')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flour')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cut')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost_parcent')->textInput() ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <?= $form->field($model, 'rap_parcent')->textInput() ?>

    <?= $form->field($model, 'sale_prise')->textInput() ?>

    <?= $form->field($model, 'remark')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'culet')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'girdle')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
