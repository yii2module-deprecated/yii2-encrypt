<?php

namespace yii2lab\app;

use yii2lab\app\domain\helpers\Config;
use yii2lab\helpers\yii\ArrayHelper;

return ArrayHelper::merge(Config::get(), @include('main.php'));
