<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_portfolio
 * @copyright	Copyright (C) 2011 - 2013 Dazzle Software, LLC. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

jimport('joomla.application.categories');

/**
 * Content Component Category Tree
 *
 * @static
 * @package		Joomla.Site
 * @subpackage	com_portfolio
 * @since 1.0
 */
class ContentCategories extends JCategories
{
	public function __construct($options = array())
	{
		$options['table'] = '#__content';
		$options['extension'] = 'com_portfolio';
		parent::__construct($options);
	}
}
