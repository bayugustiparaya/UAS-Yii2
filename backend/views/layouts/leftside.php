<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->nama_depan ?> <?= Yii::$app->user->identity->nama_belakang ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="<?= Yii::$app->urlManagerFrontend->createUrl('') ?>" method="get" class="sidebar-form">
            <button type="submit" class="btn btn-primary btn-block">Go Frontend</button>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 
                            'url' => ['site/index'], 'active' => $this->context->route == 'site/index'
                        ],
                        ['label' => 'Berita', 'icon' => 'fa fa-book', 'url' => ['berita/index'],
                            'active' => $this->context->route == 'berita/index',
                        ],
                        ['label' => 'Kategori', 'icon' => 'fa fa-tag', 'url' => ['kategori/index'],
                            'active' => $this->context->route == 'kategori/index',
                        ],
                        ['label' => 'Komentar', 'icon' => 'fa fa-wechat', 'url' => ['komentar/index'],
                            'active' => $this->context->route == 'komentar/index',
                        ],
                        ['label' => 'Users', 'icon' => 'fa fa-users', 'url' => ['user/index'],
                            'active' => $this->context->route == 'user/index',
                        ],
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
