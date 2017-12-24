<?php

namespace yii2module\encrypt\domain\services;

use yii\di\ServiceLocator;
use yii2lab\domain\services\BaseService;

class CoderService extends BaseService {
	
	const DEFAULT_PROFILE = 'default';
	
	private $profiles = [];

	public function setProfiles($value) {
		$this->profiles = new ServiceLocator();
		foreach($value as $key => &$val) {
			$val['class'] = 'nickcv\encrypter\components\Encrypter';
			$val['useBase64Encoding'] = true;
			$val['globalPassword'] = $val['password'];
			unset($val['password']);
		}
		$this->profiles->setComponents($value);
	}
	
	public function getProfiles() {
		return $this->profiles;
	}
	
	public function encode($data, $profile = self::DEFAULT_PROFILE) {
		/** @var \nickcv\encrypter\components\Encrypter $encrypter */
		$encrypter = $this->profiles->{$profile};
		$encrypted = $encrypter->encrypt($data);
		return $encrypted;
	}
	
	public function decode($code, $profile = self::DEFAULT_PROFILE) {
		/** @var \nickcv\encrypter\components\Encrypter $encrypter */
		$encrypter = $this->profiles->{$profile};
		$data = $encrypter->decrypt($code);
		return $data;
	}
	
}
