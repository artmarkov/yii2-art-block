<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model artsoft\block\models\Block */

$this->title = Yii::t('art', 'Create');
$this->params['breadcrumbs'][] = ['label' => Yii::t('art/block', 'HTML Blocks'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="block-create">
    <div class="row">
        <div class="col-sm-12">
            <h3 class="page-title"><?=  Html::encode($this->title) ?></h3>            
        </div>
    </div>
    <?= $this->render('_form', compact('model')) ?>
</div>
