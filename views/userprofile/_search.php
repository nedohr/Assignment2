<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserprofileSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userprofile-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID') ?>

    <?= $form->field($model, 'First_Name') ?>

    <?= $form->field($model, 'Last_Name') ?>

    <?= $form->field($model, 'Gender') ?>

    <?= $form->field($model, 'Date_Of_Birth') ?>

    <?php // echo $form->field($model, 'Years_Of_Experience') ?>

    <?php // echo $form->field($model, 'Industry') ?>

    <?php // echo $form->field($model, 'Location') ?>

    <?php // echo $form->field($model, 'About_Me') ?>

    <?php // echo $form->field($model, 'Professional_Title') ?>

    <?php // echo $form->field($model, 'Career_Level') ?>

    <?php // echo $form->field($model, 'Communication_Level') ?>

    <?php // echo $form->field($model, 'Organizational_Level') ?>

    <?php // echo $form->field($model, 'Job_Level') ?>

    <?php // echo $form->field($model, 'Email') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Phone') ?>

    <?php // echo $form->field($model, 'Website') ?>

    <?php // echo $form->field($model, 'Profile_Picture') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
