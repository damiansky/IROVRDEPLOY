<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Stillimage Block.
 *
 * File has been created with `block/create` command. 
 */
class StillimageBlock extends PhpBlock
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
        return 'Stillimage Block';
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
                 ['var' => 'servicesfirstheader', 'label' => 'Services naglowek pierwszej sekcji', 'type' => self::TYPE_TEXT],
                 ['var' => 'servicesfirstdescribtion', 'label' => 'Services Opis pierwszej sekcji gornej czesci', 'type' => self::TYPE_TEXTAREA],
                 ['var' => 'servicesfirstdescribtionparttwo', 'label' => 'Services Opis pierwszej sekcji dolna czesc', 'type' => self::TYPE_TEXTAREA],
                 ['var' => 'servicessecondheader', 'label' => 'Services drugi naglowek', 'type' => self::TYPE_TEXT],
                 ['var' => 'animationfirstdescribtion', 'label' => 'Services opis drugiej sekcji gorna czesc', 'type' => self::TYPE_TEXTAREA],
                 ['var' => 'animationseconddescribtion', 'label' => 'Services opis drugiej sekcji dolna czesc', 'type' => self::TYPE_TEXTAREA],
                 ['var' => 'servicesthirdheader', 'label' => 'Services trzeci naglowek', 'type' => self::TYPE_TEXT],
                 ['var' => 'vtfirstdescribtion', 'label' => 'Services opis sekcji trzeciej gorna czesc', 'type' => self::TYPE_TEXTAREA],
                 ['var' => 'vtseconddescribtion', 'label' => 'Services opis sekcji trzeciej dolna czesc', 'type' => self::TYPE_TEXTAREA],
                 ['var' => 'howeheader', 'label' => 'Naglowek sekcji czwartej', 'type' => self::TYPE_TEXT],
                 ['var' => 'fourthsectiondescribtion', 'label' => 'Services opis sekcji czwartej', 'type' => self::TYPE_TEXTAREA],
            ],
        ];
    }
    
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.animationfirstdescribtion}}
     * @param {{vars.animationseconddescribtion}}
     * @param {{vars.fourthsectiondescribtion}}
     * @param {{vars.howeheader}}
     * @param {{vars.servicesfirstdescribtionparttwo}}
     * @param {{vars.servicesfirstdescribtion}}
     * @param {{vars.servicesfirstheader}}
     * @param {{vars.servicessecondheader}}
     * @param {{vars.servicesthirdheader}}
     * @param {{vars.vtfirstdescribtion}}
     * @param {{vars.vtseconddescribtion}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Stillimage Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.servicesfirstheader is not empty %}' .
            '<tr><td><b>Services naglowek pierwszej sekcji</b></td><td>{{vars.servicesfirstheader}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.servicesfirstdescribtion is not empty %}' .
            '<tr><td><b>Services Opis pierwszej sekcji gornej czesci</b></td><td>{{vars.servicesfirstdescribtion}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.servicesfirstdescribtionparttwo is not empty %}' .
            '<tr><td><b>Services Opis pierwszej sekcji dolna czesc</b></td><td>{{vars.servicesfirstdescribtionparttwo}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.servicessecondheader is not empty %}' .
            '<tr><td><b>Services drugi naglowek</b></td><td>{{vars.servicessecondheader}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.animationfirstdescribtion is not empty %}' .
            '<tr><td><b>Services opis drugiej sekcji gorna czesc</b></td><td>{{vars.animationfirstdescribtion}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.animationseconddescribtion is not empty %}' .
            '<tr><td><b>Services opis drugiej sekcji dolna czesc</b></td><td>{{vars.animationseconddescribtion}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.servicesthirdheader is not empty %}' .
            '<tr><td><b>Services trzeci naglowek</b></td><td>{{vars.servicesthirdheader}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.vtfirstdescribtion is not empty %}' .
            '<tr><td><b>Services opis sekcji trzeciej gorna czesc</b></td><td>{{vars.vtfirstdescribtion}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.vtseconddescribtion is not empty %}' .
            '<tr><td><b>Services opis sekcji trzeciej dolna czesc</b></td><td>{{vars.vtseconddescribtion}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.howeheader is not empty %}' .
            '<tr><td><b>Naglowek sekcji czwartej</b></td><td>{{vars.howeheader}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.fourthsectiondescribtion is not empty %}' .
            '<tr><td><b>Services opis sekcji czwartej</b></td><td>{{vars.fourthsectiondescribtion}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}