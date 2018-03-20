<?php

namespace yii2module\encrypt\domain\services;

use nickcv\encrypter\components\Encrypter;
use yii\base\InvalidConfigException;
use yii\di\ServiceLocator;
use yii2lab\domain\services\BaseService;

class CoderService extends BaseService {
	
	const DEFAULT_PROFILE = 'default';
	
	/**
	 * @var  ServiceLocator
	 */
	private $profiles = [];

	public function setProfiles($value) {
		foreach($value as $key => &$val) {
			$val['class'] = Encrypter::class;
			$val['useBase64Encoding'] = true;
			$val['globalPassword'] = $val['password'];
			unset($val['password']);
		}
		$this->profiles = new ServiceLocator();
		$this->profiles->setComponents($value);
	}
	
	public function getProfileNames() {
		return array_keys($this->profiles->components);
	}
	
	public function encode($data, $profile = self::DEFAULT_PROFILE) {
		$encrypter = $this->getProfile($profile);
		$encrypted = $encrypter->encrypt($data);
		return $encrypted;
	}
	
	public function decode($code, $profile = self::DEFAULT_PROFILE) {
		$encrypter = $this->getProfile($profile);
		$data = $encrypter->decrypt($code);
		return $data;
	}
	
	/**
	 * @param $id
	 *
	 * @return Encrypter
	 * @throws InvalidConfigException
	 */
	private function getProfile($id) {
		if(!$this->profiles->has($id)) {
			throw new InvalidConfigException('Profile for encrypt "' . $id . '" not configured!');
		}
		/** @var Encrypter $encrypter */
		$encrypter = $this->profiles->get($id);
		return $encrypter;
	}
	
}
