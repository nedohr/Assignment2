<?php

namespace app\controllers;

use Yii;
use app\models\Userprofile;
use app\models\UserprofileSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * UserprofileController implements the CRUD actions for Userprofile model.
 */
class UserprofileController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Userprofile models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserprofileSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Userprofile model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Userprofile model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Userprofile();
        
       /* if(isset($_POST['Banner']))
        {
            $rnd = rand(0,9999);  // generate random number between 0-9999
            $model->attributes=$_POST['Banner'];
 
            $uploadedFile=CUploadedFile::getInstance($model,'image');
            $fileName = "{$rnd}-{$uploadedFile}";  // random number + file name
            $model->image = $fileName;
 
            if($model->save())
            {
                $uploadedFile->saveAs(Yii::app()->basePath.'/../banner/'.$fileName);  // image will uplode to rootDirectory/banner/
                $this->redirect(array('admin'));
            }
        }
        $this->render('create',array('model'=>$model));
    }*/
        
         if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if($model->file){
                $imagepath = 'uploads/profile/';
                $model->Profile_Picture = $imagepath .rand(10,100).$model->file->name;
            }

            if($model->save()){
                if($model->file){
                    $model->file->saveAs($model->Profile_Picture);
                    return $this->redirect(['view', 'id' => $model->ID]);
                }
                return $this->redirect(['view', 'id' => $model->ID]);
            }
            
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
        /*if ($model->load(Yii::$app->request->post())) {
            $model->image = UploadedFile::getInstance($model, 'image');
            if($model->Profile_Picture){
                $imagepath = 'uploads/profile/';
                $model->Profile_Picture = $imagepath .rand(10,100).$model->Profile_Picture->name;
            }

            if($model->save()){
                if($model->image){
                    $model->Profile_Picture->saveAs($model->Profile_Picture);
                    return $this->redirect(['view', 'id' => $model->ID]);
                }
                return $this->redirect(['view', 'id' => $model->ID]);
            }
            
            
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }*/
       /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }*/
        
        /* if ($model->load(Yii::$app->request->post()) && $model->save()) {
             
             $image = UploadedFile::getInstance($model,'image');
             
             $imagepath='images/';
             
             $model->Profile_Picture = $imagepath .rand(10,100).$model->image->name;
             
            if ($image){
                        $model->image = "category_{$rand_name}-{$image}"; 
           // }

                if($model->save()):
                    if($image):
                     $image->saveAs($imagepath.$model->image);
                    endif;
                endif;             
               
            }                              

             return $this->redirect(['view', 'id' => $model->id]);
        
        } else {
                return $this->render('create', [
                    'model' => $model,
                ]);*/
            }
             
             /*if(!empty($image)){
                $image->saveAs($path);
                $model->image=$image->name;
                $model->save();
            }     */
             
             
             
            /*return $this->redirect(['view', 'id' => $model->ID]);
             
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }*/
    //}

    /**
     * Updates an existing Userprofile model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        
       $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->file = UploadedFile::getInstance($model, 'file');
            if($model->file){
                $imagepath = 'uploads/profile/';
                $model->profile_picture = $imagepath .rand(10,100).$model->file->name;
            }

            if($model->save()){
                if($model->file){
                    $model->file->saveAs($model->Profile_Picture);
                    return $this->redirect(['view', 'id' => $model->id]);
                }
                return $this->redirect(['view', 'id' => $model->ID]);
            }
            
            
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
        
        /*$model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }*/
    }

    /**
     * Deletes an existing Userprofile model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
      
       
        $profile_picture = UserProfile::find()->where(['id'=>$id])->one()->Profile_Picture;
        if($profile_picture){
            if(!unlink($profile_picture)){
                return false;
            }
        }

        $userprofile = UserProfile::findOne($id);
        $userprofile->Profile_Picture = NULL;
        $userprofile->update();

        return $this->redirect(['update', 'id'=>$id]);
        /*$profile_picture = UserProfile::find()->where(['id'=>$id])->one()->profile_picture;
        
        if($profile_picture){
            if(!unlink($profile_picture)){
                return false;
            }
        }

        $userprofile = UserProfile::findOne($id);
        $userprofile->profile_picture = NULL;
        $userprofile->update();

        return $this->redirect(['update', 'id'=>$id]);*/
        
        /* $this->findModel($id)->delete();

        return $this->redirect(['index']);*/
    }

    /**
     * Finds the Userprofile model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Userprofile the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Userprofile::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
