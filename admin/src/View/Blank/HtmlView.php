<?php
namespace Joomla\Component\Blank\Administrator\View\Blank;

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Toolbar\ToolbarHelper;

class HtmlView extends BaseHtmlView
{
    public function display($tpl = null)
    {
        $this->addToolBar();
        parent::display($tpl);
    }

    protected function addToolBar()
    {
        ToolbarHelper::title(Text::_('COM_BLANK'));
		$user = Factory::getApplication()->getIdentity();
	    if ($user->authorise('core.admin', 'com_blank') || $user->authorise('core.options', 'com_blank')) {
		    ToolbarHelper::preferences('com_blank');
	    }
    }
}