<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\SaleStatus */

$this->title = 'Create Sale Status';
$this->params['breadcrumbs'][] = ['label' => 'Sale Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sale-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
