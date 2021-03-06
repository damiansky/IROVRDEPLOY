<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Footer Block.
 *
 * File has been created with `block/create` command. 
 */
class FooterBlock extends PhpBlock
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
        return 'Footer Block';
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
                 ['var' => 'footerSmallText', 'label' => 'Stopka maly tekst rok i nazwa firmy', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerSmallTextsecond', 'label' => 'Stopka maly tekst nazwa firmy czesc druga', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerSmallTextthird', 'label' => 'Stopka maly tekst wszystkie prawa zastrzezone', 'type' => self::TYPE_TEXT],
                 ['var' => 'fblinkfooter', 'label' => 'Link do facebooka', 'type' => self::TYPE_LINK],
                 ['var' => 'belinkfooter', 'label' => 'Link do behance', 'type' => self::TYPE_LINK],
                 ['var' => 'iglinkfooter', 'label' => 'Link do instagrama', 'type' => self::TYPE_LINK],
                 ['var' => 'footerlinkone', 'label' => 'Stopka link pierwszy', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerlinksecond', 'label' => 'Stopka link drugi', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerlinkthird', 'label' => 'Stopka link trzeci', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerlinkfourth', 'label' => 'STopka link czwarty', 'type' => self::TYPE_TEXT],
            ],
        ];
    }
    
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.fblinkfooter}}
     * @param {{vars.fblinkfooter}}
     * @param {{vars.footerSmallText}}
     * @param {{vars.footerlinkfourth}}
     * @param {{vars.footerlinkone}}
     * @param {{vars.footerlinksecond}}
     * @param {{vars.footerlinkthird}}
     * @param {{vars.iglinkfooter}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Footer Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.footerSmallText is not empty %}' .
            '<tr><td><b>Stopka ma y tekst</b></td><td>{{vars.footerSmallText}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.fblinkfooter is not empty %}' .
            '<tr><td><b>Link do facebooka</b></td><td>{{vars.fblinkfooter}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.fblinkfooter is not empty %}' .
            '<tr><td><b>Link do behance</b></td><td>{{vars.fblinkfooter}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.iglinkfooter is not empty %}' .
            '<tr><td><b>Link do instagrama</b></td><td>{{vars.iglinkfooter}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.footerlinkone is not empty %}' .
            '<tr><td><b>Stopka link pierwszy</b></td><td>{{vars.footerlinkone}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.footerlinksecond is not empty %}' .
            '<tr><td><b>Stopka link drugi</b></td><td>{{vars.footerlinksecond}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.footerlinkthird is not empty %}' .
            '<tr><td><b>Stopka link trzeci</b></td><td>{{vars.footerlinkthird}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.footerlinkfourth is not empty %}' .
            '<tr><td><b>STopka link czwarty</b></td><td>{{vars.footerlinkfourth}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}