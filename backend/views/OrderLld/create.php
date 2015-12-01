<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\OrderLld */

$this->title = 'Create Order Lld';
$this->params['breadcrumbs'][] = ['label' => 'Order Llds', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-lld-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
