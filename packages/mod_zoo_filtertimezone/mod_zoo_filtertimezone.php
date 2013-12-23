<?php
/**
 * @version     1.0.0
 * @package     mod_zoo_filtertimezone
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Andreas Dionysopoulos & SIA OE <info@500web.gr> - http://www.500web.gr
 */


//-- No direct access
defined('_JEXEC') or die;


//-- Include the template for display
require_once (dirname(__FILE__).DS.'helper.php');
require JModuleHelper::getLayoutPath('mod_zoo_filtertimezone');
$document = JFactory::getDocument();
$document->addStyleSheet(JURI::root().'modules/mod_zoo_filtertimezone/css/base.css');

if($params->get('color')) {
	$css_code_color='#worldzoo_filtertimezone {
				color:#'.$params->get('color').';
			}';
	$document->addStyleDeclaration($css_code_color);
}

if($params->get('size')) {
	
	
	$css_code_size='#worldzoo_filtertimezone {
				font-size:'.$params->get('size').';
				}';
	$document->addStyleDeclaration($css_code_size);
}	


$jsFile = JURI::root().'modules/mod_zoo_filtertimezone/js/jstime/jstime.js';
$document->addScript( $jsFile );
