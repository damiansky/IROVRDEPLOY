<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * About Block.
 *
 * File has been created with `block/create` command. 
 */
class AboutBlock extends PhpBlock
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
        return 'About Block';
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
                 ['var' => 'aboutmainHeader', 'label' => 'Naglowek sekcji o nas', 'type' => self::TYPE_TEXT],
                 ['var' => 'abouttext', 'label' => 'Opis sekcji o nas', 'type' => self::TYPE_TEXTAREA],
                 ['var' => 'wefocusHeader', 'label' => 'Mini naglowek na czym sie skupiamy', 'type' => self::TYPE_TEXT],
                 ['var' => 'listPoints', 'label' => 'Wartosci naszej firmy', 'type' => self::TYPE_LIST_ARRAY],
            ],
        ];
    }
    
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.aboutmainHeader}}
     * @param {{vars.abouttext}}
     * @param {{vars.listPoints}}
     * @param {{vars.wefocusHeader}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">About Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.aboutmainHeader is not empty %}' .
            '<tr><td><b>Naglowek sekcji o nas</b></td><td>{{vars.aboutmainHeader}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.abouttext is not empty %}' .
            '<tr><td><b>Opis sekcji o nas</b></td><td>{{vars.abouttext}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.wefocusHeader is not empty %}' .
            '<tr><td><b>Mini naglowek na czym sie skupiamy</b></td><td>{{vars.wefocusHeader}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.listPoints is not empty %}' .
            '<tr><td><b>Wartosci naszej firmy</b></td><td>{% for item in vars.listPoints %}{{item.value}},{% endfor %}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}