<?php

namespace yii2module\encrypt\admin\helpers;

use common\enums\rbac\PermissionEnum;

// todo: отрефакторить - сделать нормальный интерфейс и родителя

class Menu {
	
	static function getMenu() {
		return [
			'label' => ['encrypt/coder', 'title'],
			'icon' => 'shield',
			'url' => 'encrypt/coder',
			'module' => 'encrypt',
			'access' => PermissionEnum::ENCRYPT_MANAGE,
		];
	}

}
