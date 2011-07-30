<?php
/*
 * @package         Mod_TwitterWidget
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informacao.
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;

// Include helper.php once
require_once dirname(__FILE__).'/helper.php';
if( $params->get('loadcss', 1) == 1){
    JHTML::stylesheet('TWITTERWIDGET.css', '/modules/mod_TWITTERWIDGET/');
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$randonresult = getRandonText();

require JModuleHelper::getLayoutPath('mod_TWITTERWIDGET', $params->get('layout', 'default'));


