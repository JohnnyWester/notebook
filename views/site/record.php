<?php

/* @var $this yii\web\View */


$this->title = $info->title;
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="wrapper_body">
    <div class="cbm_wrap ">
        <h1><?= $info->title ?></h1>
        <p><?= $info->description ?></p>
        <br />
    </div>
</div>

