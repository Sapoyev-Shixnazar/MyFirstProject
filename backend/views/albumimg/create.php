<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\AlbumImg */

$this->title = 'Create Album Img';
$this->params['breadcrumbs'][] = ['label' => 'Album Imgs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="album-img-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
