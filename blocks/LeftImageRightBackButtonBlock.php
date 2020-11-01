<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Left Image Right Back Button Block.
 *
 * File has been created with `block/create` command. 
 */
class LeftImageRightBackButtonBlock extends PhpBlock
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
        return 'Left Image Right Back Button Block';
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
                 ['var' => 'image', 'label' => 'Image', 'type' => self::TYPE_FILEUPLOAD, 'options' => ['no_filter' => false]],
            ],
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function extraVars()
    {
        return [
            'image' => BlockHelper::fileUpload($this->getVarValue('image')), 
        ];
    }

    /**
     * {@inheritDoc} 
     *
     * @param {{extras.image}}
     * @param {{vars.image}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Left Image Right Back Button Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.image is not empty %}' .
            '<tr><td><b>Image</b></td><td>{{vars.image}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}