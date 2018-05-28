<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ziyaretci */

$this->title = 'Ziyaretci Ekle';
$this->params['breadcrumbs'][] = ['label' => 'Ziyaret Edenler', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ziyaretci-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
