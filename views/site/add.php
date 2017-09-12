<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Add record';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields add record:</p>

    <?php $form = ActiveForm::begin(); ?>

            <?= $form->field($model, 'title')->textInput() ?>

            <?= $form->field($model, 'description')->textarea() ?>

            <?= $form->field($model, 'author')->textInput() ?>

    <div class="form-group">
        <div>
            <?= Html::submitButton('Add record', ['class' => 'btn btn-primary']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
