<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ListView;

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>BLOG YII</h1>
        <p class="lead">Bayu Gusti Paraya - 1811082018 - TRPL 3A</p>
    </div>

    <div class="body-content">
        <div class="row">
            <div class="col-lg-8">
                <?= ListView::widget([
                    'dataProvider' => $dataProvider,
                    'layout' => "{items}\n{pager}",
                    'itemOptions' => ['class' => 'item'],
                    'itemView' => '_itemBerita'
                ]);
                ?>
            </div>
            <div class="col-lg-4">
                
            </div>
        </div>
    </div>
</div>