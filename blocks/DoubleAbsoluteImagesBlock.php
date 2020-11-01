<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Double Absolute Images Block.
 *
 * File has been created with `block/create` command. 
 */
class DoubleAbsoluteImagesBlock extends PhpBlock
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
        return 'Double Absolute Images Block';
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
                 ['var' => 'leftImage', 'label' => 'Left Image', 'type' => self::TYPE_FILEUPLOAD, 'options' => ['no_filter' => false]],
                 ['var' => 'rightImage', 'label' => 'Right image', 'type' => self::TYPE_FILEUPLOAD, 'options' => ['no_filter' => false]],
            ],
        ];
    }
    
    /**
     * @inheritDoc
     */
    public function extraVars()
    {
        return [
            'leftImage' => BlockHelper::fileUpload($this->getVarValue('leftImage')),            'rightImage' => BlockHelper::fileUpload($this->getVarValue('rightImage')),
        ];
    }

    /**
     * {@inheritDoc} 
     *
     * @param {{extras.leftImage}}
     * @param {{extras.rightImage}}
     * @param {{vars.leftImage}}
     * @param {{vars.rightImage}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Double Absolute Images Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.leftImage is not empty %}' .
            '<tr><td><b>Left Image</b></td><td>{{vars.leftImage}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.rightImage is not empty %}' .
            '<tr><td><b>Right image</b></td><td>{{vars.rightImage}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}