<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductOrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'product_id') ?>

    <?= $form->field($model, 'order_lld_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'shape') ?>

    <?php // echo $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'clarity') ?>

    <?php // echo $form->field($model, 'lab') ?>

    <?php // echo $form->field($model, 'cert') ?>

    <?php // echo $form->field($model, 'langth') ?>

    <?php // echo $form->field($model, 'weight') ?>

    <?php // echo $form->field($model, 'height') ?>

    <?php // echo $form->field($model, 'depth') ?>

    <?php // echo $form->field($model, 'table_lld') ?>

    <?php // echo $form->field($model, 'polish') ?>

    <?php // echo $form->field($model, 'sym') ?>

    <?php // echo $form->field($model, 'flour') ?>

    <?php // echo $form->field($model, 'cut') ?>

    <?php // echo $form->field($model, 'cost_parcent') ?>

    <?php // echo $form->field($model, 'cost') ?>

    <?php // echo $form->field($model, 'rap_parcent') ?>

    <?php // echo $form->field($model, 'sale_prise') ?>

    <?php // echo $form->field($model, 'remark') ?>

    <?php // echo $form->field($model, 'culet') ?>

    <?php // echo $form->field($model, 'girdle') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
