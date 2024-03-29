<?php

/**
 * @version     1.0.0
 * @package     mod_zoo_filtertimezone
 * @copyright   Copyright (C) 2013. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Andreas Dionysopoulos & SIA OE <info@500web.gr> - http://www.500web.gr
 */

defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

/**
 * Form Field class for the Joomla Framework.
 *
 * @package		Joomla.Framework
 * @subpackage	Form
 * @since		1.6
 */
class JFormFieldColorpicker extends JFormField
{
	/**
	 * The form field type.
	 *
	 * @var  		string
	 * @since	1.6
	 */
	protected $type = 'Colorpicker';

	/**
	 * Method to get the field input markup.
	 *
	 * @return	string	The field input markup.
	 * @since 	1.6
	 */
	protected function getInput()
	{
		global $JElementJSColorJSWritten;
		if (!$JElementJSColorJSWritten)
		{
                        $jsFile = dirname(__FILE__) . "/../js/jscolor/jscolor.js";
                        $jsUrl = str_replace(JPATH_ROOT, JURI::root(true), $jsFile);
                        $jsUrl = str_replace(DS, "/", $jsUrl);

			$document	= JFactory::getDocument();
			$document->addScript( $jsUrl );

			$JElementJSColorJSWritten = TRUE;
		}

		// Initialize JavaScript field attributes.
		$onchange	= $this->element['onchange'] ? ' onchange="'.(string) $this->element['onchange'].'"' : '';

		$class		= ' class="color {required:false}"';

		return '<input type="text" name="'.$this->name.'" id="'.$this->id.'"' .
				' value="'.htmlspecialchars($this->value, ENT_COMPAT, 'UTF-8').'"' .
				$class.$onchange.'/>';
	}
}
