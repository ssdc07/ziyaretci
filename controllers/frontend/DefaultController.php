<?php
namespace kouosl\ziyaretci\controllers\frontend;

use Yii;
use kouosl\ziyaretci\models\Ziyaretci;
use yii\data\ActiveDataProvider;
use kouosl\base\controllers\frontend\BaseController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Default controller for the `ziyaretci` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
  /**
   * {@inheritdoc}
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
   * Lists all Ziyaretci models.
   * @return mixed
   */
  public function actionIndex()
  {
      $dataProvider = new ActiveDataProvider([
          'query' => Ziyaretci::find(),
      ]);

      return $this->render('index', [
          'dataProvider' => $dataProvider,
      ]);
  }

  /**
   * Displays a single Ziyaretci model.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionView($id)
  {
      return $this->render('view', [
          'model' => $this->findModel($id),
      ]);
  }

  /**
   * Creates a new Ziyaretci model.
   * If creation is successful, the browser will be redirected to the 'view' page.
   * @return mixed
   */
  public function actionCreate()
  {
      $model = new Ziyaretci();

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->ziyaretci_id]);
      }

      return $this->render('create', [
          'model' => $model,
      ]);
  }

  /**
   * Updates an existing Ziyaretci model.
   * If update is successful, the browser will be redirected to the 'view' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionUpdate($id)
  {
      $model = $this->findModel($id);

      if ($model->load(Yii::$app->request->post()) && $model->save()) {
          return $this->redirect(['view', 'id' => $model->ziyaretci_id]);
      }

      return $this->render('update', [
          'model' => $model,
      ]);
  }

  /**
   * Deletes an existing Ziyaretci model.
   * If deletion is successful, the browser will be redirected to the 'index' page.
   * @param integer $id
   * @return mixed
   * @throws NotFoundHttpException if the model cannot be found
   */
  public function actionDelete($id)
  {
      $this->findModel($id)->delete();

      return $this->redirect(['index']);
  }

  /**
   * Finds the Ziyaretci model based on its primary key value.
   * If the model is not found, a 404 HTTP exception will be thrown.
   * @param integer $id
   * @return Ziyaretci the loaded model
   * @throws NotFoundHttpException if the model cannot be found
   */
  protected function findModel($id)
  {
      if (($model = Ziyaretci::findOne($id)) !== null) {
          return $model;
      }

      throw new NotFoundHttpException('The requested page does not exist.');
  }
}
