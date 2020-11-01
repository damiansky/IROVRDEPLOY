<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Grey About Block.
 *
 * File has been created with `block/create` command. 
 */
class GreyAboutBlock extends PhpBlock
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
        return 'Grey About Block';
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
                 ['var' => 'aboutText', 'label' => 'About text', 'type' => self::TYPE_TEXTAREA],
            ],
        ];
    }
    
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.aboutText}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Grey About Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.aboutText is not empty %}' .
            '<tr><td><b>About text</b></td><td>{{vars.aboutText}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}