<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Case Header With Navbar Block.
 *
 * File has been created with `block/create` command. 
 */
class CaseHeaderWithNavbarBlock extends PhpBlock
{
    /**
     * @var bool Choose whether a block can be cached trough the caching component. Be carefull with caching container blocks.
     */
    public $cacheEnabled = true;
    
    /**
     * @var int The cache lifetime for this block in seconds (3600 = 1 hour), only affects when cacheEnabled is true
     */
    public $cacheExpiration = 3600;

    /**
     * @inheritDoc
     */
    public function blockGroup()
    {
        return ProjectGroup::class;
    }

    /**
     * @inheritDoc
     */
    public function name()
    {
        return 'Case Header With Navbar Block';
    }
    
    /**
     * @inheritDoc
     */
    public function icon()
    {
        return 'extension'; // see the list of icons on: https://design.google.com/icons/
    }
 
    /**
     * @inheritDoc
     */
    public function config()
    {
        return [
            'vars' => [
                 ['var' => 'projectName', 'label' => 'Project Name', 'type' => self::TYPE_TEXT],
                 ['var' => 'projectYear', 'label' => 'Project Year', 'type' => self::TYPE_TEXT],
                 ['var' => 'projectLocation', 'label' => 'Project Location', 'type' => self::TYPE_TEXT],
                 ['var' => 'projectServices', 'label' => 'Project services', 'type' => self::TYPE_TEXT],
                 ['var' => 'projectServices2', 'label' => 'Project Services second', 'type' => self::TYPE_TEXT],
                 ['var' => 'background', 'label' => 'Background picture', 'type' => self::TYPE_FILEUPLOAD, 'options' => ['no_filter' => false]],
            ],
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function extraVars()
    {
        return [
            'background' => BlockHelper::fileUpload($this->getVarValue('background')),
        ];
    }

    /**
     * {@inheritDoc} 
     *
     * @param {{extras.background}}
     * @param {{vars.background}}
     * @param {{vars.projectLocation}}
     * @param {{vars.projectName}}
     * @param {{vars.projectServices2}}
     * @param {{vars.projectServices}}
     * @param {{vars.projectYear}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Case Header With Navbar Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.projectName is not empty %}' .
            '<tr><td><b>Project Name</b></td><td>{{vars.projectName}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.projectYear is not empty %}' .
            '<tr><td><b>Project Year</b></td><td>{{vars.projectYear}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.projectLocation is not empty %}' .
            '<tr><td><b>Project Location</b></td><td>{{vars.projectLocation}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.projectServices is not empty %}' .
            '<tr><td><b>Project services</b></td><td>{{vars.projectServices}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.projectServices2 is not empty %}' .
            '<tr><td><b>Project Services second</b></td><td>{{vars.projectServices2}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.background is not empty %}' .
            '<tr><td><b>Background picture</b></td><td>{{vars.background}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}