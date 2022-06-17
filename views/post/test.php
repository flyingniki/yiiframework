<?php

use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Test Action</h1>

<?php

// use function app\controllers\debug;

// debug(Yii::$app);

//debug(Yii::$app);

//debug($model);
if (Yii::$app->session->hasFlash('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <? echo Yii::$app->session->getFlash('success'); ?>
    </div>

<? endif;
if (Yii::$app->session->hasFlash('error')) : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <? echo Yii::$app->session->getFlash('error'); ?>
    </div>

<? endif;
$form = ActiveForm::begin(['options' => ['id' => 'testForm']]) ?>
<?= $form->field($model, 'name')->label('Имя') ?>
<?= $form->field($model, 'email')->input('email') ?>
<?= $form->field($model, 'text')->label('Текст сообщения')->textarea(['rows' => 5]) ?>
<?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
<?php ActiveForm::end() ?>