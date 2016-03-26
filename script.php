<?php
/**
 * @package		SMZ Font Awesome
 * @author		Sergio Manzi - http://smz.it
 * @copyright	Copyright (c) 2013 - 2015 Sergio Manzi. All rights reserved.
 * @license		GNU General Public License version 3 or (at your option) any later version.
 * @version		4.4.0
 */

class PlgSystemFontawesomeInstallerScript
{
 public function install($parent)
 {
  // Enable plugin
  $db  = JFactory::getDbo();
  $query = $db->getQuery(true);
  $query->update('#__extensions');
  $query->set($db->quoteName('enabled') . ' = 1');
  $query->where($db->quoteName('element') . ' = ' . $db->quote('fontawesome'));
  $query->where($db->quoteName('type') . ' = ' . $db->quote('plugin'));
  $db->setQuery($query);
  $db->execute();
 }
}
