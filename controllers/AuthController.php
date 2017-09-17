<?php

namespace app\controllers;

use Yii;
use app\models\SignUp;
use app\models\Login;
use yii\web\Controller;
use app\models\User;

class AuthController extends Controller
{
    public function actionSignUp() {
        if(!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new SignUp();

        if (Yii::$app->request->post()) {
            $model->attributes = Yii::$app->request->post('SignUp');

            if ($model->validate() && $model->signUp()) {
                return $this->redirect('/auth/login');
            }
        }
        return $this->render('sign-up', ['model' => $model]);
    }

    public function actionLogin() {
        if(!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $modelLogin = new Login();
        $modelLogin->attributes = Yii::$app->request->post('Login');

        if ($modelLogin->validate()) {
            Yii::$app->user->login($modelLogin->getUser());
            return $this->goHome();
        }

        return $this->render('login', ['modelLogin' => $modelLogin]);
    }

    public function actionLogout() {
        if (!Yii::$app->user->isGuest) {
            Yii::$app->user->logout();
            return $this->redirect('/auth/login');
        }
    }


}