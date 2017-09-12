<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Records;

class SiteController extends Controller
{
    /**
     * @inheritdoc
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
        $records = Records::getAll();

        return $this->render('index', [
            'records' => $records
        ]);
    }

    /**
     * Displays crud page.
     *
     * @return string
     */
    public function actionCrud()
    {
        $items = Records::getAll();
        return $this->render('crud', [
            'items' => $items,
        ]);
    }

    /**
     * Displays crud page.
     *
     * @return string
     */
    public function actionAdd()
    {
        $model = new Records();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            $model->save();

            return $this->redirect('index');
        }

        return $this->render('add', [
            'model' => $model
        ]);
    }

    public function actionRecord($id) {
        $info = Records::getOne($id);
        return $this->render('record', [
            'info' => $info
        ]);
    }

    public function actionUpdate($id) {
        $info = Records::getOne($id);

        if ($info->load(Yii::$app->request->post()) && $info->validate()) {
            $info->save();
            return $this->redirect('crud');
        }

        return $this->render('update', [
            'info' => $info
        ]);
    }

    public function actionDelete($id) {
        $info = Records::getOne($id);
        $info->delete();
        return $this->redirect('crud');
    }
}
