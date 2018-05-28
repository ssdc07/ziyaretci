<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ziyaretci */

$this->title = 'Ziyaretciyi Güncelle: ' . $model->ziyaretci_adsoyad;
$this->params['breadcrumbs'][] = ['label' => 'Ziyaretcis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ziyaretci_adsoyad, 'url' => ['view', 'id' => $model->ziyaretci_id]];
$this->params['breadcrumbs'][] = 'Güncelle';
?>
<div class="ziyaretci-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
