<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;
use app\modules\projects\models\Projects;

/**
 * Hero Block.
 *
 * File has been created with `block/create` command. 
 */
class HeroBlock extends PhpBlock
{
    /**
     * @var boolean Choose whether block is a layout/container/segmnet/section block or not, Container elements will be optically displayed
     * in a different way for a better user experience. Container block will not display isDirty colorizing.
     */
    public $isContainer = true;

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
        return 'Hero Block';
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
                 ['var' => 'heroMainText', 'label' => 'Glowny opis', 'type' => self::TYPE_TEXT],
                 ['var' => 'heroMainTextSecond', 'label' => 'Glowny opis druga linia', 'type' => self::TYPE_TEXT],
            ],
        ];
    }

    public function extraVars()
    {
        return [
            'left' => $this->getLeft(),
            'right' => $this->getRight(),
            'middle' => $this->getMiddle(),
        ];
    }

    private function getLeft()
    {
        $left = Projects::find()->where(['column_id' => 1])->orderBy(['id' => SORT_DESC])->all();

        return $left;
    }

    private function getRight()
    {
        $right = Projects::find()->where(['column_id' => 3])->orderBy(['id' => SORT_DESC])->all();

        return $right;
    }

    private function getMiddle()
    {
        $middle = Projects::find()->where(['column_id' => 2])->orderBy(['id' => SORT_DESC])->all();

        return $middle;
    }
    
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.heroMainTextSecond}}
     * @param {{vars.heroMainText}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Hero Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.heroMainText is not empty %}' .
            '<tr><td><b>Glowny opis</b></td><td>{{vars.heroMainText}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.heroMainTextSecond is not empty %}' .
            '<tr><td><b>Glowny opis druga linia</b></td><td>{{vars.heroMainTextSecond}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}