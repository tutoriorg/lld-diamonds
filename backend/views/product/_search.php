<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'ref') ?>

    <?= $form->field($model, 'shape') ?>

    <?= $form->field($model, 'weight') ?>

    <?= $form->field($model, 'color') ?>

    <?php // echo $form->field($model, 'clarity') ?>

    <?php // echo $form->field($model, 'cut') ?>

    <?php // echo $form->field($model, 'pol') ?>

    <?php // echo $form->field($model, 'symm') ?>

    <?php // echo $form->field($model, 'fluo') ?>

    <?php // echo $form->field($model, 'rap_list') ?>

    <?php // echo $form->field($model, 'rap') ?>

    <?php // echo $form->field($model, 'price_crt') ?>

    <?php // echo $form->field($model, 'cert') ?>

    <?php // echo $form->field($model, 'details') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
