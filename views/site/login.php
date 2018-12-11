<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Авторизация';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h3 class="text-center margin-xl-bottom"><?= Html::encode($this->title) ?></h3>

    <p>Пожалуйста введите ваши данные:</p>
    <div class="form">
    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label form-horizontal','role'=>'form'],
        ],
    ]); ?>
        <div class="col-sm-10">
        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
        </div>
        <div class="col-sm-10">
        <?= $form->field($model, 'password')->passwordInput() ?>
        </div>
        <div class="col-sm-10">

            <!--
            <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>
            -->

        </div>


                <?= Html::submitButton('Войти', ['class' => 'btn btn-primary btn-block btn-lg', 'name' => 'login-button']) ?>


    <?php ActiveForm::end(); ?>
    </div>
</div>

