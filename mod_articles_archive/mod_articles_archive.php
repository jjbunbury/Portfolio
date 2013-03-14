<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_archive
 * @copyright	Copyright (C) 2011 - 2013 Dazzle Software, LLC. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$params->def('count', 10);
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
$list = modArchiveHelper::getList($params);

require JModuleHelper::getLayoutPath('mod_articles_archive', $params->get('layout', 'default'));
