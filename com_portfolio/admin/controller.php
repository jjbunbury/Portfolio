<?php
/**
 * @copyright	Copyright (C) 2011 - 2013 Dazzle Software, LLC. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Component Controller
 *
 * @package		Joomla.Administrator
 * @subpackage	com_portfolio
 */
class ContentController extends JControllerLegacy
{
	/**
	 * @var		string	The default view.
	 * @since	1.0
	 */
	protected $default_view = 'articles';

	/**
	 * Method to display a view.
	 *
	 * @param	boolean			If true, the view output will be cached
	 * @param	array			An array of safe url parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
	 *
	 * @return	JController		This object to support chaining.
	 * @since	1.0
	 */
	public function display($cachable = false, $urlparams = false)
	{
		// Load the submenu.
		ContentHelper::addSubmenu(JRequest::getCmd('view', 'articles'));

		$view		= JRequest::getCmd('view', 'articles');
		$layout 	= JRequest::getCmd('layout', 'articles');
		$id			= JRequest::getInt('id');

		// Check for edit form.
		if ($view == 'article' && $layout == 'edit' && !$this->checkEditId('com_portfolio.edit.article', $id)) {
			// Somehow the person just went to the form - we don't allow that.
			$this->setError(JText::sprintf('JLIB_APPLICATION_ERROR_UNHELD_ID', $id));
			$this->setMessage($this->getError(), 'error');
			$this->setRedirect(JRoute::_('index.php?option=com_portfolio&view=articles', false));

			return false;
		}

		parent::display();

		return $this;
	}
}
