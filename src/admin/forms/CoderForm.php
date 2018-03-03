<?php

namespace yii2module\encrypt\admin\forms;

use Yii;
use yii\base\Model;

class CoderForm extends Model {
	
	const ACTION_ENCODE = 'encode';
	const ACTION_DECODE = 'decode';
	
	public $text;
	
	/**
	 * @inheritdoc
	 */
	public function rules()
	{
		return [
			[['text'], 'trim'],
			[['text'], 'required'],
		];
	}
	
	public function attributeLabels()
	{
		return [
			'text' => Yii::t('encrypt/coder', 'text'),
		];
	}
}
