<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Employees;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        // return $this->render('index');
        
        // get data all from database...................
        $employees = Employees::find()->all();
        return $this->render('home',['employees1' => $employees]);

    }

  

    // send data in database.....................

    // public function actionCreate()
    // {
    //     $employee = new Employees();
    //     $formData = Yii::$app->request->post();
    //     $employee->profile_photo = UploadedFile::getInstance($employee,'profile_photo');
    //     $fileName=time().'.'.$employee->profile_photo->extension;
    //     $employee->profile_photo->saveAs('uploads/'.$fileName);
    //     $employee->profile_photo=$fileName;
    //     if($employee->load($formData)){

    //         if($employee->save()){
    //             Yii::$app->getSession()->setFlash('message','Employee Publish Successfully');
    //             return $this->redirect(['index']);
    //         }
    //         else{
    //             Yii::$app->getSession()->setFlash('message','failed');
    //         }
    //     }
    //     return $this->render('create',['employee' => $employee]);

    // }
    public function actionCreate()
{
    $employee = new Employees();
    $formData = Yii::$app->request->post();

    if ($employee->load($formData)) {
        // Check if profile_photo was uploaded
        $employee->profile_photo = UploadedFile::getInstance($employee, 'profile_photo');
        
        if ($employee->profile_photo) {
            $fileName = time() . '.' . $employee->profile_photo->extension;
            $filePath = 'uploads/' . $fileName;
            
            // Save the uploaded file
            if ($employee->profile_photo->saveAs($filePath)) {
                $employee->profile_photo = $fileName;
            }
        }

        if ($employee->save()) {
            Yii::$app->getSession()->setFlash('message', 'Employee Published Successfully');
            return $this->redirect(['index']);
        } else {
            Yii::$app->getSession()->setFlash('message', 'Failed to save employee');
        }
    }

    return $this->render('create', ['employee' => $employee]);
}

    // show the view page...................
    public function actionView($id)
    {
        // echo $id;
        $employee=Employees::findOne($id);
        return $this->render('view',['employee'=>$employee]);
        
    }

    // update column...............
    public function actionUpdate($id)
    {
        // echo $id;
        $employee=Employees::findOne($id);
        if($employee->load(Yii::$app->request->post()) && $employee->save()){
            Yii::$app->getSession()->setFlash('message','Employee Updated Successfully');
            return $this->redirect(['index','id'=>$employee->id]);
        }else{
            Yii::$app->getSession()->setFlash('message','failed');
        }
        
        return $this->render('update',['employee'=>$employee]);
        
    }

    // delete data.......................
    public function actionDelete($id)
    {
        // return $this->render('delete');
        $employee = Employees::findOne($id)->delete();
        if($employee){
            Yii::$app->getSession()->setFlash('message','Employee Deleted Successfully');
            return $this->redirect(['index']);
        }
    }
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
