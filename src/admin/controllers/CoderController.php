<?php

namespace yii2module\encrypt\admin\controllers;

use common\enums\rbac\PermissionEnum;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii2module\encrypt\admin\forms\CoderForm;

class CoderController extends Controller
{
	
	public function behaviors()
	{
		return [
			'access' => [
				'class' => AccessControl::className(),
				'rules' => [
					[
						'allow' => true,
						'roles' => [PermissionEnum::ENCRYPT_MANAGE],
					],
				],
			],
		];
	}
	
	public function actionIndex() {
		$result = null;
		$model = new CoderForm();
		if(Yii::$app->request->isPost) {
			$body = Yii::$app->request->post('CoderForm');
			$model->setAttributes($body, false);
			$model->validate();
			if(Yii::$app->request->post('submit') === CoderForm::ACTION_ENCODE) {
				$result = Yii::$app->encrypter->encrypt($model->text);
			} elseif(Yii::$app->request->post('submit') === CoderForm::ACTION_DECODE) {
				$result = Yii::$app->encrypter->decrypt($model->text);
			}
		}
		return $this->render('index', [
			'model' => $model,
			'result' => $result,
		]);
	}
	
}
