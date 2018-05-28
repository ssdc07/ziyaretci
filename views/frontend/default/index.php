<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ziyaretci Listesi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ziyaretci-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Ziyaretci Ekle', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ziyaretci_id',
            'ziyaretci_adsoyad',
            'ziyaretci_tarihi',
            'ziyaret_sebebi',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
