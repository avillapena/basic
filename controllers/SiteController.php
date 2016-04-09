<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\EntryForm;

class SiteController extends Controller
{	
	public function actionSay($messaje = "Hello")
	{
		return $this->render('say',['messaje'=>$messaje]);
	}

    
    public function actionFormulario($mensaje = "AlgoEnRender")
    {
        return $this->render('formulario',['mensaje'=>$mensaje]) ;
        
    }

	public function actionRequest()
	{
		$mensaje = "AlgoEnredirect";
		if (isset($_REQUEST['nombre']))
		{
			$mensaje = "Correcto! " . $_REQUEST['nombre'];
			
		}
		return $this->redirect(['site/formulario','mensaje'=>$mensaje]);
	}
	
	public function actionValidarFormulario()
	{
		$mensaje = "Valido. Felicidades!!";
		return $this->render("validarformulario",['mensaje'=>$mensaje]);
		
	}
	
	public function actionEntry()
	{
		$model = new EntryForm();
		
		if ($model->load(Yii::$app->request->post()) && $model->validate())
		{
			return $this->render('entry-confirm',['model' =>$model]);
		
		} else {
				return $this->render('entry',['model' => $model]);
		}
		
	}
	
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
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
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

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

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        } else {
            return $this->render('contact', [
                'model' => $model,
            ]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }
}
