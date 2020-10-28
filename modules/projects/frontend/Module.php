<?php

namespace app\modules\projects\frontend;

/**
 * Projects Frontend Module.
 *
 * File has been created with `module/create` command. 
 * 
 * @author
 * @since 1.0.0
 */
class Module extends \luya\base\Module
{
    public $urlRules = [
        'projects/<id:\d+>' => 'projects/default/detail', // which is equals to the above
    ];
}