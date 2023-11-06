<?php
/*
 * @package     Blank Package
 * @subpackage  com_Blank
 * @version     1.0.0
 * @author Septdir Workshop, <https://septdir.com>, Sergey Tolkachyov <https://web-tolk.ru>
 * @copyright   Copyright (c) 2023 Delo Design. All rights reserved.
 * @license     GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 * @link https://septdir.com, https://web-tolk.ru
 */

namespace Joomla\Component\Blank\Administrator\Extension;

\defined('JPATH_PLATFORM') or die;

use Joomla\CMS\Association\AssociationServiceInterface;
use Joomla\CMS\Association\AssociationServiceTrait;
use Joomla\CMS\Component\Router\RouterServiceInterface;
use Joomla\CMS\Component\Router\RouterServiceTrait;
use Joomla\CMS\Extension\BootableExtensionInterface;
use Joomla\CMS\Extension\MVCComponent;
use Joomla\CMS\HTML\HTMLRegistryAwareTrait;
use Joomla\CMS\Plugin\PluginHelper;
use Psr\Container\ContainerInterface;

class BlankComponent extends MVCComponent implements
	BootableExtensionInterface, RouterServiceInterface
{
	use HTMLRegistryAwareTrait;
	use RouterServiceTrait;

	/**
	 * Booting the extension. This is the function to set up the environment of the extension like
	 * registering new class loaders, etc.
	 *
	 *
	 * @param   ContainerInterface  $container  The container
	 *
	 * @since 1.0.0
	 */
	public function boot(ContainerInterface $container)
	{

	}
}
