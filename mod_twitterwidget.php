<?php
/*
 * @package         Mod_TwitterWidget
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informacao.
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;

$url = $params->get('url', '/modules/mod_twitterwidget/js/twitterwidget.js');
$moduleclass_sfx = $params->get('moduleclass_sfx', NULL);

//Try detect if is not one absolute URL. If is, will try to add as relative and respect the base path
//Good for Joomla installed on subdirectory
if(strpos($url, 'http:') === FALSE){
    $url = JURI::base(true) . $url;
}

require JModuleHelper::getLayoutPath('mod_twitterwidget', 'default');