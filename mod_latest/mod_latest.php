<?php
/**
 * @package		Joomla.Administrator
 * @copyright	Copyright (C) 2011 - 2013 Dazzle Software, LLC. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

// Include dependancies.
require_once dirname(__FILE__).'/helper.php';

$list = modLatestHelper::getList($params);
require JModuleHelper::getLayoutPath('mod_latest', $params->get('layout', 'default'));
