<?php

namespace app\blocks;

use luya\cms\base\PhpBlock;
use luya\cms\frontend\blockgroups\ProjectGroup;
use luya\cms\helpers\BlockHelper;

/**
 * Contact Block.
 *
 * File has been created with `block/create` command. 
 */
class ContactBlock extends PhpBlock
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
        return 'Contact Block';
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
                 ['var' => 'contactMainheader', 'label' => 'Kontakt g  wny nag  wek', 'type' => self::TYPE_TEXT],
                 ['var' => 'emailContact', 'label' => 'Email', 'type' => self::TYPE_TEXT],
                 ['var' => 'adressone', 'label' => 'Adres', 'type' => self::TYPE_TEXT],
                 ['var' => 'adresstwo', 'label' => 'Pokoj i miasto', 'type' => self::TYPE_TEXT],
                 ['var' => 'fblinkcontact', 'label' => 'Link do facebooka', 'type' => self::TYPE_LINK],
                 ['var' => 'belinkcontact', 'label' => 'Link do behance', 'type' => self::TYPE_LINK],
                 ['var' => 'iglinkcontact', 'label' => 'Link do instagrama', 'type' => self::TYPE_LINK],
                 ['var' => 'inlinkcontact', 'label' => 'Link do linkedina', 'type' => self::TYPE_LINK],
                 ['var' => 'ytlinkcontact', 'label' => 'Link do youtube', 'type' => self::TYPE_LINK],
                 ['var' => 'nameInput', 'label' => 'Imie lub nazwa firmy', 'type' => self::TYPE_TEXT],
                 ['var' => 'emailinput', 'label' => 'Email formularz kontaktowy', 'type' => self::TYPE_TEXT],
                 ['var' => 'messageinput', 'label' => 'Wiadomosc formularz kontaktowy', 'type' => self::TYPE_TEXT],
                 ['var' => 'sendbuttontext', 'label' => 'Przycisk wy lij', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerfirstlinkcontact', 'label' => 'Pierwszy link widok mobilny', 'type' => self::TYPE_TEXT],
                 ['var' => 'footersecondlinkcontact', 'label' => 'Drugi link widok mobilny', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerthirdlinkcontact', 'label' => 'Trzeci link widok mobilny', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerfourthlinkcontact', 'label' => 'Czwarty link widok mobilny', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerSmallText', 'label' => 'Stopka maly tekst rok i nazwa firmy', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerSmallTextsecond', 'label' => 'Stopka maly tekst nazwa firmy czesc druga', 'type' => self::TYPE_TEXT],
                 ['var' => 'footerSmallTextthird', 'label' => 'Stopka maly tekst wszystkie prawa zastrzezone', 'type' => self::TYPE_TEXT],
            ],
        ];
    }
    
    /**
     * {@inheritDoc} 
     *
     * @param {{vars.adressone}}
     * @param {{vars.belinkcontact}}
     * @param {{vars.contactMainheader}}
     * @param {{vars.emailContact}}
     * @param {{vars.emailinput}}
     * @param {{vars.fblinkcontact}}
     * @param {{vars.footerfirstlinkcontact}}
     * @param {{vars.footerfourthlinkcontact}}
     * @param {{vars.footersecondlinkcontact}}
     * @param {{vars.footerthirdlinkcontact}}
     * @param {{vars.iglinkcontact}}
     * @param {{vars.inlinkcontact}}
     * @param {{vars.messageinput}}
     * @param {{vars.nameInput}}
     * @param {{vars.pokJIMiasto}}
     * @param {{vars.sendbuttontext}}
     * @param {{vars.ytlinkcontact}}
    */
    public function admin()
    {
        return '<h5 class="mb-3">Contact Block</h5>' .
            '<table class="table table-bordered">' .
            '{% if vars.contactMainheader is not empty %}' .
            '<tr><td><b>Kontakt g  wny nag  wek</b></td><td>{{vars.contactMainheader}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.emailContact is not empty %}' .
            '<tr><td><b>Email</b></td><td>{{vars.emailContact}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.adressone is not empty %}' .
            '<tr><td><b>Adres</b></td><td>{{vars.adressone}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.pokJIMiasto is not empty %}' .
            '<tr><td><b>Pok j i miasto</b></td><td>{{vars.pokJIMiasto}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.fblinkcontact is not empty %}' .
            '<tr><td><b>Link do facebooka</b></td><td>{{vars.fblinkcontact}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.belinkcontact is not empty %}' .
            '<tr><td><b>Link do behance</b></td><td>{{vars.belinkcontact}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.iglinkcontact is not empty %}' .
            '<tr><td><b>Link do instagrama</b></td><td>{{vars.iglinkcontact}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.inlinkcontact is not empty %}' .
            '<tr><td><b>Link do linkedina</b></td><td>{{vars.inlinkcontact}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.ytlinkcontact is not empty %}' .
            '<tr><td><b>Link do youtube</b></td><td>{{vars.ytlinkcontact}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.nameInput is not empty %}' .
            '<tr><td><b>Imie lub nazwa firmy</b></td><td>{{vars.nameInput}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.emailinput is not empty %}' .
            '<tr><td><b>Email formularz kontaktowy</b></td><td>{{vars.emailinput}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.messageinput is not empty %}' .
            '<tr><td><b>Wiadomosc formularz kontaktowy</b></td><td>{{vars.messageinput}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.sendbuttontext is not empty %}' .
            '<tr><td><b>Przycisk wy lij</b></td><td>{{vars.sendbuttontext}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.footerfirstlinkcontact is not empty %}' .
            '<tr><td><b>Pierwszy link widok mobilny</b></td><td>{{vars.footerfirstlinkcontact}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.footersecondlinkcontact is not empty %}' .
            '<tr><td><b>Drugi link widok mobilny</b></td><td>{{vars.footersecondlinkcontact}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.footerthirdlinkcontact is not empty %}' .
            '<tr><td><b>Trzeci link widok mobilny</b></td><td>{{vars.footerthirdlinkcontact}}</td></tr>' .
            '{% endif %}'.
            '{% if vars.footerfourthlinkcontact is not empty %}' .
            '<tr><td><b>Czwarty link widok mobilny</b></td><td>{{vars.footerfourthlinkcontact}}</td></tr>' .
            '{% endif %}'.
            '</table>';
    }
}