<?php

namespace app\controllers;

use app\models\profil;
use app\models\profilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProfilController implements the CRUD actions for profil model.
 */
class ProfilController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all profil models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new profilSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single profil model.
     * @param int $id_mahasiswa Id Mahasiswa
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_mahasiswa)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_mahasiswa),
        ]);
    }

    /**
     * Creates a new profil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new profil();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_mahasiswa' => $model->id_mahasiswa]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing profil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_mahasiswa Id Mahasiswa
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_mahasiswa)
    {
        $model = $this->findModel($id_mahasiswa);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_mahasiswa' => $model->id_mahasiswa]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing profil model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_mahasiswa Id Mahasiswa
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_mahasiswa)
    {
        $this->findModel($id_mahasiswa)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the profil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_mahasiswa Id Mahasiswa
     * @return profil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_mahasiswa)
    {
        if (($model = profil::findOne(['id_mahasiswa' => $id_mahasiswa])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
