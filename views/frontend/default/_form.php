<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ziyaretci */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ziyaretci-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ziyaretci_adsoyad')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ziyaretci_tarihi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ziyaret_sebebi')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Kaydet', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
