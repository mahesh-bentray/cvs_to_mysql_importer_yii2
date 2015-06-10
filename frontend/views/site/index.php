<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
/* @var $this yii\web\View */
$this->title = 'My Yii Application';
?>
<div class="site-index">
    <?php $form = ActiveForm::begin(['options'=>['enctype'=>'multipart/form-data'],"action"=>"index.php?r=site/import"]); ?>
    <div class="row">
        CSV to Upload:
        <input type="file" name="file">
    </div>
    <?= Html::submitButton('Import',['class'=>'btn btn-primary','name'=>"import"]) ?>
    <?php ActiveForm::end()?>
</div>
