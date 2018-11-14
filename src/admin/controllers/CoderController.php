<?php

namespace yii2module\encrypt\admin\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii2lab\extension\web\helpers\Behavior;
use yii2module\encrypt\admin\forms\CoderForm;
use yii2module\encrypt\domain\enums\EncryptPermissionEnum;

class CoderController extends Controller
{
	
	public function behaviors()
	{
		return [
			'access' => Behavior::access(EncryptPermissionEnum::MANAGE),
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
				$result = \App::$domain->encrypt->coder->encode($model->text);
			} elseif(Yii::$app->request->post('submit') === CoderForm::ACTION_DECODE) {
				$result = \App::$domain->encrypt->coder->decode($model->text);
			}
		}
		return $this->render('index', [
			'model' => $model,
			'result' => $result,
		]);
	}
	
}
