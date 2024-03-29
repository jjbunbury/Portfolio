<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_portfolio
 * @copyright	Copyright (C) 2011 - 2013 Dazzle Software, LLC. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include dependancies
require_once JPATH_COMPONENT.'/helpers/route.php';
require_once JPATH_COMPONENT.'/helpers/query.php';

$controller = JControllerLegacy::getInstance('Content');
$controller->execute(JRequest::getCmd('task'));
$controller->redirect();
