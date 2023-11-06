<?php

/**
 * @package         Joomla.Site
 * @subpackage      com_newsfeeds
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license         GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Blank\Site\View\Blank;


// phpcs:disable PSR1.Files.SideEffects
use Joomla\CMS\Component\ComponentHelper;
use Joomla\CMS\Factory;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;
use Joomla\CMS\Application\SiteApplication;

\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Newsfeed categories view.
 *
 * @since  1.5
 */
class HtmlView extends BaseHtmlView
{
	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	public function display($tpl = null) : void
	{
		$params           = ComponentHelper::getParams('com_blank');
		$menuActiveParams = Factory::getContainer()->get(SiteApplication::class)->getMenu('site')->getActive()->getParams();

		$titleSource = (bool) $params->get('titlesource', 0);
		$descSource  = (bool) $params->get('descsource', 0);

		$jConfig = Factory::getContainer()->get('config');
		$doc = Factory::getApplication()->getDocument();
		if ($titleSource)
		{
			$pageTitle = $jConfig->get('sitename');
		}
		else
		{
			$pageTitle = $menuActiveParams->get('page_title', $jConfig->get('sitename'));
		}

		if ($descSource)
		{
			$pageDesc = $doc->description;
		}
		else
		{
			$pageDesc = $menuActiveParams->get('menu-meta_description', $doc->description);
		}

		$doc->setTitle($pageTitle);
		if ($pageDesc)
		{
			$doc->setMetaData('description', $pageDesc);
		}

		parent::display($tpl);
	}

}
