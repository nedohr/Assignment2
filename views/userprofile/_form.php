<?php

use yii\helpers\Html;
//use yii\widgets\ActiveForm;
use yii\bootstrap\ActiveForm;
use yii\web\UploadedFile;

/* @var $this yii\web\View */
/* @var $model app\models\Userprofile */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userprofile-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'First_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Last_Name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Gender')->inline()->radioList(['Male' => 'Male', 'Female' => 'Female'])->label('Gender') ?>

    <?= $form->field($model, 'Date_Of_Birth')->textInput() ?>

    <?= $form->field($model, 'Years_Of_Experience')->textInput() ?>

    <?= $form->field($model, 'Industry')->inline()->radioList(['IT' => 'IT', 'Business' => 'Business','Hospitality' => 'Hospitality','Medicine' => 'Medicine',])->label('Industry') ?>

    <?= $form->field($model, 'Location')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'About_Me')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Professional_Title')->inline()->radioList(['Director' => 'Director', 'President' => 'President','CEO' => 'CEO','Professor' => 'Professor','Administrator' => 'Administrator', 'Manager' => 'Manager','Dean' => 'Dean','Chair' => 'Chair'])->label('Professional Title') ?>

    <?= $form->field($model, 'Career_Level')->radioList(['Entry' => 'Entry', 'Intermediate' => 'Intermediate','Experienced' => 'Experienced','Advanced' => 'Advanced','Expert' => 'Expert'])->label('Career Level') ?>

    <?= $form->field($model, 'Communication_Level')->inline()->radioList(['0-25%' => '0-25%', '26-50%' => '26-50%','51-75%' => '51-75%','76-100%' => '76-100%'])->label('Communication Level') ?>

    <?= $form->field($model, 'Organizational_Level')->inline()->radioList(['0-25%' => '0-25%', '26-50%' => '26-50%','51-75%' => '51-75%','76-100%' => '76-100%'])->label('Organizational Level')?>

    <?= $form->field($model, 'Job_Level')->inline()->radioList(['Junior' => 'Junior', 'Medium' => 'Medium','Senior' => 'Senior'])->label('Job Level') ?>

    <?= $form->field($model, 'Email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Phone')->textInput() ?>

    <?= $form->field($model, 'Website')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Profile_Picture')->fileInput() ?>
    
    <?php
    if ($model->Profile_Picture){
    echo '<div class="im" style="padding-left:12em;">';
    echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->Profile_Picture.'" width="90px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
    echo Html::a('Delete Profile Picture', ['erase', 'id'=>$model->ID], ['class'=>'btn btn-danger']).'</br>';
    echo '</div>';
}
    /*if ($model->image){
        echo '<div class="im" style="padding-left:12em;">';
        echo '<img src="'.\Yii::$app->request->BaseUrl.'/'.$model->profile_picture.'" width="90px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
        echo Html::a('Delete Profile Picture', ['erase', 'id'=>$model->id], ['class'=>'btn btn-danger']).'</br>';
        echo '</div>';*/
?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
