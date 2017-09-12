<?php

/* @var $this yii\web\View */

use yii\helpers\Url;

$this->title = 'Notebook';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <table class="table table-bordered table-hover">
        <thead class="inverse">
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Author</th>
            <th>Date</th>
        </tr>
        </thead>
        <tbody>
            <?php foreach ($records as $record): ?>
            <tr>
                <th scope="row"><?= $record->id ?></th>
                <td><a href="<?= Url::to(['record', 'id' => $record->id]) ?>"><?= $record->title ?></a></td>
                <td><?= $record->author ?></td>
                <td><?= $record->date ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
        <?php
            if ($records == false) {
                echo "<h1>No one records was not found!</h1>";
            }
        ?>
</div>
