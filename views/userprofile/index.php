<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UserprofileSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Userprofiles';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="userprofile-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Userprofile', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID',
            'First_Name',
            'Last_Name',
            'Gender',
            'Date_Of_Birth',
            // 'Years_Of_Experience',
            // 'Industry',
            // 'Location',
            // 'About_Me',
            // 'Professional_Title',
            // 'Career_Level',
            // 'Communication_Level',
            // 'Organizational_Level',
            // 'Job_Level',
            // 'Email:email',
            // 'Address',
            // 'Phone',
            // 'Website',
            // 'Profile_Picture',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
