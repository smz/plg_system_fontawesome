<?php
/**
 * @package		SMZ Font Awesome
 * @author		Sergio Manzi - http://smz.it
 * @copyright	Copyright (c) 2013 - 2015 Sergio Manzi. All rights reserved.
 * @license		GNU General Public License version 3 or (at your option) any later version.
 * @version		4.4.0
 */

defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plgSystemFontawesome extends JPlugin
{
	public function onBeforeCompileHead()
	{
		// Check that we are in the site application.
		if (JFactory::getApplication()->isAdmin())
		{
			return true;
		}

		JHtml::stylesheet('plg_system_fontawesome/font-awesome.min.css', array(), true);
		return true;
	}
}
