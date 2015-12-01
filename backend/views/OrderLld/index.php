<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\OrderLldSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Order Llds';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-lld-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Order Lld', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'status_id',
            'name',
            'first_name',
            'last_name',
            // 'email:email',
            // 'phone',
            // 'company',
            // 'qty',
            // 'total_price',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
