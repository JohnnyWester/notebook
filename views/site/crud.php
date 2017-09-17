<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

use yii\helpers\Html;


$this->title = 'Editing records';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php

use yii\helpers\Url;

?>

<h1>Admin panel</h1>

<table class="table table-stripped">
    <thead>
    <tr>
        <td>#</td>
        <td>Title</td>
        <td>Action</td>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($items as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->title ?></td>
            <td>
                <a href="<?= Url::to(['record', 'id' => $item->id]) ?>">
                    <i class="glyphicon glyphicon-eye-open"></i>
                </a>
                <a href="<?= Url::to(['site/update', 'id' => $item->id]) ?>">
                    <i class="glyphicon glyphicon-edit"></i>
                </a>
                <a href="<?= Url::to(['site/delete', 'id' => $item->id]) ?>">
                    <i class="glyphicon glyphicon-remove"></i>
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<?php
    if ($items == false) {
        echo "<h1>No one records was not found!</h1>";
    }
?>
