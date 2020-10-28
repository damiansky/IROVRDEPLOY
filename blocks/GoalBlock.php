<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;
use app\modules\projects\models\Projects;

/**
 * Goal Block.
 *
 * File has been created with `block/create` command. 
 */
class GoalBlock extends PhpBlock
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
        return 'Goal Block';
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
                 ['var' => 'mainGoal', 'label' => 'Nasza misja linia pierwsza', 'type' => self::TYPE_TEXT],
                 ['var' => 'mainGoalSecond', 'label' => 'Nasza misja linia druga', 'type' => self::TYPE_TEXT],
                 ['var' => 'latestProject', 'label' => 'Najnowsze projekty', 'type' => self::TYPE_TEXT],
                 ['var' => 'fblinkGoals', 'label' => 'Link do facebooka', 'type' => self::TYPE_LINK],
                 ['var' => 'belinkGoals', 'label' => 'Link do behance', 'type' => self::TYPE_LINK],
                 ['var' => 'iglinkGoals', 'label' => 'Link do instagrama', 'type' => self::TYPE_LINK],
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
        $left = Projects::find()->where(['column_id' => Projects::COLUMN_LEFT])->orderBy(['id' => SORT_DESC])->all();

        return $left;
    }

    private function getRight()
    {
        $right = Projects::find()->where(['column_id' => Projects::COLUMN_RIGHT])->orderBy(['id' => SORT_DESC])->all();

        return $right;
    }

    private function getMiddle()
    {
        $middle = Projects::find()->where(['column_id' => Projects::COLUMN_MIDDLE])->orderBy(['id' => SORT_DESC])->all();

        return $middle;
    }
    
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.belinkGoals}}
     * @param {{vars.fblinkGoals}}
     * @param {{vars.iglinkGoals}}
     * @param {{vars.latestProject}}
     * @param {{vars.mainGoalSecond}}
     * @param {{vars.mainGoal}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Goal Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.mainGoal is not empty %}' .
            '<tr><td><b>Nasza misja linia pierwsza</b></td><td>{{vars.mainGoal}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.mainGoalSecond is not empty %}' .
            '<tr><td><b>Nasza misja linia druga</b></td><td>{{vars.mainGoalSecond}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.latestProject is not empty %}' .
            '<tr><td><b>Najnowsze projekty</b></td><td>{{vars.latestProject}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.fblinkGoals is not empty %}' .
            '<tr><td><b>Link do facebooka</b></td><td>{{vars.fblinkGoals}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.belinkGoals is not empty %}' .
            '<tr><td><b>Link do behance</b></td><td>{{vars.belinkGoals}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.iglinkGoals is not empty %}' .
            '<tr><td><b>Link do instagrama</b></td><td>{{vars.iglinkGoals}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}