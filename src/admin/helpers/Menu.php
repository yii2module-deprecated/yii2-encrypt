<?php

namespace yii2module\encrypt\admin\helpers;

use yii2lab\extension\menu\interfaces\MenuInterface;
use yii2module\encrypt\domain\enums\EncryptPermissionEnum;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['encrypt/coder', 'title'],
			'icon' => 'shield',
			'url' => 'encrypt/coder',
			'module' => 'encrypt',
			'access' => EncryptPermissionEnum::MANAGE,
		];
	}

}
