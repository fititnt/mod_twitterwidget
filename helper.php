<?php
/*
 * @package         Mod_TwitterWidget
 * @author          Emerson Rocha Luiz ( emerson@webdesign.eng.br - @fititnt -  http://fititnt.org )
 * @copyright       Copyright (C) 2005 - 2011 Webdesign Assessoria em Tecnologia da Informacao.
 * @license         GPL3
 */
// no direct access
defined('_JEXEC') or die;


/*
 * Return one randon result from table #__mod_TWITTERWIDGET
 * return object
 */
function getRandonText(){
    $db = &JFactory::getDBO();
    $query = $db->getQuery(true);
    $query->select('*')
          ->from('#__mod_TWITTERWIDGET')
          ->where('published = 1')
          ->order('RAND()')//chose one randon
          //->limit('1') //@todo: testar mais tarde para retornar sometne um valor
            ;
    $db->setQuery($query);
    $result = $db->loadObject();
    
    return $result;
}