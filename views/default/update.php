<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model artsoft\block\models\Block */

$this->title = Yii::t('art', 'Update "{item}"', ['item' => $model->slug]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/block', 'HTML Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('art', 'Update');
?>

<div class="block-update">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title"><?=  Html::encode($this->title) ?></h3>            
        </div>
    </div>
    <?= $this->render('_form', compact('model')) ?>
</div>


