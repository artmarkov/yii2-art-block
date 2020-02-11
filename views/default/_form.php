<?php

use artsoft\helpers\Html;
use artsoft\models\User;
use artsoft\widgets\ActiveForm;
use artsoft\widgets\LanguagePills;

/* @var $this yii\web\View */
/* @var $model artsoft\block\models\Block */
/* @var $form artsoft\widgets\ActiveForm; */
?>

<div class="block-form">

    <?php
    $form = ActiveForm::begin([
        'id' => 'block-form',
        'validateOnBlur' => false,
    ])
    ?>

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-12">

                    <?php if ($model->isMultilingual()): ?>
                        <?= LanguagePills::widget() ?>
                    <?php endif; ?>

                    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

                    <?= $form->field($model, 'created_by')->dropDownList(User::getUsersList()) ?>

                    <?= $form->field($model, 'content')->widget(trntv\aceeditor\AceEditor::class,
                        [
                            'mode' => 'html',
                            'theme' => 'sqlserver', //chrome,clouds,clouds_midnight,cobalt,crimson_editor,dawn,dracula,dreamweaver,eclipse,iplastic
                            //merbivore,merbivore_soft,sqlserver,terminal,tomorrow_night,twilight,xcode
                        ]) ?>

                </div>
            </div>
        </div>
        <div class="panel-footer">
            <div class="form-group">
                <?= Html::a(Yii::t('art', 'Go to list'), ['/block/default/index'], ['class' => 'btn btn-default']) ?>
                <?= Html::submitButton(Yii::t('art', 'Save'), ['class' => 'btn btn-primary']) ?>

                <?php if (!$model->isNewRecord): ?>
                    <?=
                    Html::a(Yii::t('art', 'Delete'), ['/block/default/delete', 'id' => $model->id], [
                        'class' => 'btn btn-danger',
                        'data' => [
                            'confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                            'method' => 'post',
                        ],
                    ])
                    ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
