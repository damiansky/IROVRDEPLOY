<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Big Photo Centered Block.
 *
 * File has been created with `block/create` command. 
 */
class BigPhotoCenteredBlock extends PhpBlock
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
        return 'Big Photo Centered Block';
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
                 ['var' => 'bigPhotoCentered', 'label' => 'Image', 'type' => self::TYPE_FILEUPLOAD, 'options' => ['no_filter' => false]],
            ],
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function extraVars()
    {
        return [
            'bigPhotoCentered' => BlockHelper::fileUpload($this->getVarValue('bigPhotoCentered')),
        ];
    }

    /**
     * {@inheritDoc} 
     *
     * @param {{extras.bigPhotoCentered}}
     * @param {{vars.bigPhotoCentered}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Big Photo Centered Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.bigPhotoCentered is not empty %}' .
            '<tr><td><b>Image</b></td><td>{{vars.bigPhotoCentered}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}