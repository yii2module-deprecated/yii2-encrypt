<?php

namespace yii2module\encrypt\admin\helpers;

use common\enums\rbac\PermissionEnum;
use yii2lab\helpers\interfaces\MenuInterface;

class Menu implements MenuInterface {
	
	public function toArray() {
		return [
			'label' => ['encrypt/coder', 'title'],
			'icon' => 'shield',
			'url' => 'encrypt/coder',
			'module' => 'encrypt',
			'access' => PermissionEnum::ENCRYPT_MANAGE,
		];
	}

}
