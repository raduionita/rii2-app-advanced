<?php
use \yii\helpers\Html;
use \yii\widgets\ActiveForm;
?>
<?php $widget = ActiveForm::begin(['id' => 'loginform', ]); ?>
<?= $widget->field($form, 'username')->input('text', ['placeholder' => 'username']); ?>
<?= $widget->field($form, 'password')->input('password', ['placeholder' => 'password']); ?>
<?= Html::submitButton('Login', ['class' => 'btn btn-primary']); ?>
<?php ActiveForm::end(); ?>
