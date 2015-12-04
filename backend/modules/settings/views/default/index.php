<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $searchModel backend\modules\settings\models\SettingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Settings';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="settings-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>

    </p>

    <?php /*= GridView::widget([
        //S'dataProvider' => $dataProvider,
        //'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'site_name',
            'site_email:email',
            'site_phone',
            'inport_file_url:url',
            'import_images_url:url',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); */?>

</div>
