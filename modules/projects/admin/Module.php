<?php

namespace app\modules\projects\admin;

/**
 * Projects Admin Module.
 *
 * File has been created with `module/create` command. 
 * 
 * @author
 * @since 1.0.0
 */
class Module extends \luya\admin\base\Module
{
    public $apis = [
        'api-projects-projects' => 'app\modules\projects\admin\apis\ProjectsController',
    ];
    
    public function getMenu()
    {
        return (new \luya\admin\components\AdminMenuBuilder($this))
            ->node('Projects', 'extension')
                ->group('Group')
                    ->itemApi('Projects', 'projectsadmin/projects/index', 'label', 'api-projects-projects');
    }
}