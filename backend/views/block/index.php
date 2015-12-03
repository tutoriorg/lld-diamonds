<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use backend\models\Block;




/* @var $this yii\web\View */
/* @var $searchModel backend\models\BlockSearch */
/* @var $model backend\models\Block */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Blocks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="block-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Block', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php $model = new Block()?>
    <?php $model->load(Yii::$app->request->post())?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title',
            'content:ntext',
            'image',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

    <?php if ($model->image): ?>
        <img src="<?php echo Url::base(true).'/'.$model->image ?>" alt="" style="width: 200px; height: auto">

    <?php endif; ?>

</div>
