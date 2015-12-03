<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Page */
/* @var $model backend\models\Meta */

$this->title = 'Create Page';
$this->params['breadcrumbs'][] = ['label' => 'Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="page-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
         'meta' => $meta,
    ]) ?>

</div>
