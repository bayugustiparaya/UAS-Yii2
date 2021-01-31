<?php

/* @var $this yii\web\View */

$this->title = Yii::$app->name;
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Welcome!</h1>

        <p class="lead">Ini adalah dashboard Admin.</p>

        <p><a class="btn btn-lg btn-success" href="http://www.yiiframework.com">Get started with Yii</a></p>
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Berita</h2>

                <p>Manajemen Data Berita. Posting informasi sesui fakta</p>

                <p><a class="btn btn-default" href="../berita/index">Goo !! &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Kategori</h2>

                <p>Kelompokkan berita dengan memasukkan kedalam Kategori.</p>

                <p><a class="btn btn-default" href="../kategori/index">Goo !! &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Komentar</h2>

                <p>Yuk teliti dalam omongan netizen. Sortir komentar yang pantas di tampilkan.</p>

                <p><a class="btn btn-default" href="../komentar/index">Goo !! &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
