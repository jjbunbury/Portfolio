<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_articles_categories
 * @copyright	Copyright (C) 2011 - 2013 Dazzle Software, LLC. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<ul class="categories-module<?php echo $moduleclass_sfx; ?>">
<?php
require JModuleHelper::getLayoutPath('mod_articles_categories', $params->get('layout', 'default').'_items');
?></ul>
