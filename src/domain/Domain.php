<?php

namespace yii2module\encrypt\domain;

/**
 * Class Domain
 * 
 * @package yii2module\encrypt\domain
 *
 * @property \yii2module\encrypt\domain\services\CoderService $coder
 */
class Domain extends \yii2lab\domain\Domain {

	public function config() {
		return [
			'services' => [
				'coder' => [
					'profiles' => env('encrypt.profiles'),
				],
			],
		];
	}

}