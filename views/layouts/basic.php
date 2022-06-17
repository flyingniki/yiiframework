<?php

use app\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $this->title ?></title>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <div class="container">
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <?= Html::a('Главная', '/web/') ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Статьи', ['post/index']) ?>
                </li>
                <li class="nav-item">
                    <?= Html::a('Статья', ['post/show']) ?>
                </li>
            </ul>
        </div>
    </div>
    <?php
    if (isset($this->blocks['block1'])) : echo $this->blocks['block1'];
    endif;
    ?>
    <?= $content ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>