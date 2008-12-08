<?php
/**
 * @version		$Id$
 * @package		Kunena
 * @subpackage	com_kunena
 * @copyright	(C) 2008 Kunena. All rights reserved, see COPYRIGHT.php
 * @license		GNU General Public License, see LICENSE.php
 * @link		http://www.kunena.com
 */

defined('_JEXEC') or die('Invalid Request.');

jimport('joomla.application.component.view');

/**
 * The HTML Kunena Members View
 *
 * @package		Kunena
 * @subpackage	com_kunena
 * @version		1.0
 */
class KunenaViewMembers extends JView
{
	/**
	 * Display the view
	 *
	 * @access	public
	 */
	function display($tpl = null)
	{
		$state		= $this->get('State');
		$items		= $this->get('Items');
		$pagination	= $this->get('Pagination');

		// Check for errors.
		if (count($errors = $this->get('Errors'))) {
			JError::raiseError(500, implode("\n", $errors));
			return false;
		}

		// Build the published state filter options.
		$options	= array();
		$options[]	= JHTML::_('select.option', '*', 'Any');
		$options[]	= JHTML::_('select.option', '0', 'Active');
		$options[]	= JHTML::_('select.option', '1', 'Blocked');

		$this->assignRef('state',		$state);
		$this->assignRef('items',		$items);
		$this->assignRef('pagination',	$pagination);
		$this->assignRef('filter_state',$options);

		parent::display($tpl);
	}

	/**
	 * Build the default toolbar.
	 *
	 * @access	protected
	 * @return	void
	 * @since	1.0
	 */
	function buildDefaultToolBar()
	{
		JToolBarHelper::title('Kunena: '.JText::_('Members'), 'logo');

		$state = $this->get('State');
		JToolBarHelper::custom('member.publish', 'publish.png', 'publish_f2.png', 'Publish', true);
		JToolBarHelper::custom('member.unpublish', 'unpublish.png', 'unpublish_f2.png', 'Unpublish', true);
		JToolBarHelper::deleteList('', 'member.delete');
		JToolBarHelper::custom('member.edit', 'edit.png', 'edit_f2.png', 'Edit', true);
		JToolBarHelper::custom('member.new', 'new.png', 'new_f2.png', 'New', false);
	}
}
