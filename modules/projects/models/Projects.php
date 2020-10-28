<?php

namespace app\modules\projects\models;

use Yii;
use luya\admin\ngrest\base\NgRestModel;

/**
 * Projects.
 * 
 * File has been created with `crud/create` command. 
 *
 * @property integer $id
 * @property integer $column_id
 * @property string $name
 * @property integer $dynamic_page
 * @property integer $thumbnail
 */
class Projects extends NgRestModel
{
    /**
     * @inheritdoc
     */
    public $i18n = ['name'];

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%projects_table}}';
    }

    /**
     * @inheritdoc
     */
    public static function ngRestApiEndpoint()
    {
        return 'api-projects-projects';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'column_id' => Yii::t('app', 'Column ID'),
            'name' => Yii::t('app', 'Name'),
            'dynamic_page' => Yii::t('app', 'Dynamic Page'),
            'thumbnail' => Yii::t('app', 'Thumbnail'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['column_id', 'name'], 'required'],
            [['column_id', 'dynamic_page', 'thumbnail'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function ngRestAttributeTypes()
    {
        return [
            'column_id' => ['selectArray', 'data' => [1 => 'Lewa kolumna', 2 => 'Srodkowa kolumna', 3 => 'Prawa kolumna']],
            'name' => 'text',
            'dynamic_page' => 'cmsPage',
            'thumbnail' => 'image',
        ];
    }

    /**
     * @inheritdoc
     */
    public function ngRestScopes()
    {
        return [
            ['list', ['column_id', 'name', 'dynamic_page', 'thumbnail']],
            [['create', 'update'], ['column_id', 'name', 'dynamic_page', 'thumbnail']],
            ['delete', false],
        ];
    }
}
