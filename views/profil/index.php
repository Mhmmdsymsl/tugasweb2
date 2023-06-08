<?php

use app\models\profil;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\profilSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Profils';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="profil-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Profil', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_mahasiswa',
            'foto_profil',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, profil $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_mahasiswa' => $model->id_mahasiswa]);
                 }
            ],
        ],
    ]); ?>


</div>
