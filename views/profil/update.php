<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\profil $model */

$this->title = 'Update Profil: ' . $model->id_mahasiswa;
$this->params['breadcrumbs'][] = ['label' => 'Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_mahasiswa, 'url' => ['view', 'id_mahasiswa' => $model->id_mahasiswa]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="profil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
