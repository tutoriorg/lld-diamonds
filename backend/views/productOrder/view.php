<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\ProductOrder */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Product Orders', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="product-order-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'product_id',
            'order_lld_id',
            'name',
            'shape',
            'color',
            'clarity',
            'lab',
            'cert',
            'langth',
            'weight',
            'height',
            'depth',
            'table_lld',
            'polish',
            'sym',
            'flour',
            'cut',
            'cost_parcent',
            'cost',
            'rap_parcent',
            'sale_prise',
            'remark',
            'culet',
            'girdle',
        ],
    ]) ?>

</div>
