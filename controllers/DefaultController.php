<?php

namespace artsoft\block\controllers;

use artsoft\controllers\admin\BaseController;

/**
 * Controller implements the CRUD actions for Block model.
 */
class DefaultController extends BaseController
{
    public $modelClass = 'artsoft\block\models\Block';
    public $modelSearchClass = 'artsoft\block\models\search\BlockSearch';

    protected function getRedirectPage($action, $model = null)
    {
        switch ($action) {
            case 'update':
                return ['update', 'id' => $model->id];
                break;
            case 'create':
                return ['update', 'id' => $model->id];
                break;
            default:
                return parent::getRedirectPage($action, $model);
        }
    }
}