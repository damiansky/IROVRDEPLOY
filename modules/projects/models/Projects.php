<?php

namespace app\modules\projects\models;

use Yii;
use luya\admin\ngrest\base\NgRestModel;
use luya\cms\models\NavItem;

/**
 * Projects.
 * 
 * File has been created with `crud/create` command. 
 *
 * @property integer $id
 * @property integer $column_id
 * @property string $name
 * @property integer $dynamic_page
 * @property integer $small_image
 * @property integer $thumbnail
 */
class Projects extends NgRestModel
{
    public const COLUMN_LEFT=1;
    public const COLUMN_MIDDLE=2;
    public const COLUMN_RIGHT=3;
    public const IMAGE_SMALL=4;
    public const IMAGE_BIG=5;
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
            'column_id' => Yii::t('app', 'Kolumna'),
            'name' => Yii::t('app', 'Nazwa projektu'),
            'dynamic_page' => Yii::t('app', 'Podstrona projektu'),
            'thumbnail' => Yii::t('app', 'Thumbnail'),
            'small_image' => Yii::t('app', 'Rozmiar zdjecia'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['column_id', 'name'], 'required'],
            [['column_id', 'dynamic_page', 'thumbnail', 'small_image'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function ngRestAttributeTypes()
    {
        return [
            'column_id' => ['selectArray', 'data' => [self::COLUMN_LEFT => 'Lewa kolumna', self::COLUMN_MIDDLE => 'Srodkowa kolumna', self::COLUMN_RIGHT => 'Prawa kolumna']],
            'name' => 'text',
            'dynamic_page' => 'cmsPage',
            'thumbnail' => 'image',
            'small_image' => ['selectArray', 'data' => [self::IMAGE_SMALL => 'Zdjecie male', self::IMAGE_BIG => 'Zdjecie duze']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function ngRestScopes()
    {
        return [
            ['list', ['column_id', 'name', 'dynamic_page', 'thumbnail', 'small_image']],
            [['create', 'update'], ['column_id', 'name', 'dynamic_page', 'thumbnail', 'small_image']],
            ['delete', true],
        ];
    }

    public function renderBlocks()
    {
        $navItem = NavItem::findOne($this->dynamic_page->getId());

        return $navItem->getType()->renderPlaceholder('content');
    }
}
