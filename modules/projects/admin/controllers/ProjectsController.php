<?php

namespace app\modules\projects\admin\controllers;

/**
 * Projects Controller.
 * 
 * File has been created with `crud/create` command. 
 */
class ProjectsController extends \luya\admin\ngrest\base\Controller
{
    /**
     * @var string The path to the model which is the provider for the rules and fields.
     */
    public $modelClass = 'app\modules\projects\models\Projects';
}