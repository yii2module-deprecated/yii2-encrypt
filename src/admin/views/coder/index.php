<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model yii2module\encrypt\admin\forms\CoderForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii2module\encrypt\admin\forms\CoderForm;

$this->title = Yii::t('encrypt/coder', 'title');
\App::$domain->navigation->breadcrumbs->create($this->title);
?>
<div class="send-sms">

    <div class="row">
        <div class="col-lg-12">
			<?php $form = ActiveForm::begin(); ?>
			
			<?= $form->field($model, 'text')->textarea() ?>
	
            <div class="form-group">
				<?= Html::submitButton(Yii::t('action', 'encode'), ['class' => 'btn btn-primary', 'value'=>CoderForm::ACTION_ENCODE, 'name'=>'submit']) ?>
				<?= Html::submitButton(Yii::t('action', 'decode'), ['class' => 'btn btn-primary', 'value'=>CoderForm::ACTION_DECODE, 'name'=>'submit']) ?>
            </div>
			
			<?php ActiveForm::end(); ?>
	
	        <?php if(!empty($result)) { ?>
                <pre><code><?= $result ?></code></pre>
	        <?php } ?>

        </div>
    </div>
</div>
