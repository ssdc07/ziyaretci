<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ziyaretci */

$this->title = $model->ziyaretci_adsoyad;
$this->params['breadcrumbs'][] = ['label' => 'Ziyaretci Listesi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ziyaretci-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Güncelle', ['update', 'id' => $model->ziyaretci_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Sil', ['delete', 'id' => $model->ziyaretci_id], [
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
            'ziyaretci_id',
            'ziyaretci_adsoyad',
            'ziyaretci_tarihi',
            'ziyaret_sebebi',
        ],
    ]) ?>

</div>
