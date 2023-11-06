<?php
/*
 * @package     Com blank Package
 * @subpackage  com_blank
 * @version     2.0.0
 * @author      Sergey Tolkachyov <https://web-tolk.ru>
 * @copyright   Copyright (c) 2023 Delo Design. All rights reserved.
 * @license     GNU/GPL license: https://www.gnu.org/copyleft/gpl.html
 * @link        https://web-tolk.ru
 */

\defined('_JEXEC') or die;

use Joomla\CMS\Component\Router\RouterFactoryInterface;
use Joomla\CMS\Dispatcher\ComponentDispatcherFactoryInterface;
use Joomla\CMS\Extension\ComponentInterface;
use Joomla\CMS\Extension\Service\Provider\ComponentDispatcherFactory;
use Joomla\CMS\Extension\Service\Provider\MVCFactory;
use Joomla\CMS\Extension\Service\Provider\RouterFactory;
use Joomla\CMS\HTML\Registry;
use Joomla\CMS\MVC\Factory\MVCFactoryInterface;
use Joomla\Component\Blank\Administrator\Extension\BlankComponent;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;

return new class () implements ServiceProviderInterface {

    /**
     * Registers the service provider with a DI container.
     *
     * @param   Container  $container  The DI container.
     *
     * @since  1.0.0
     */
    public function register(Container $container)
    {

        $container->registerServiceProvider(new MVCFactory('\\Joomla\\Component\\Blank'));
        $container->registerServiceProvider(new ComponentDispatcherFactory('\\Joomla\\Component\\Blank'));
        $container->registerServiceProvider(new RouterFactory('\\Joomla\\Component\\Blank'));

        $container->set(
            ComponentInterface::class,
            function (Container $container) {
                $component = new BlankComponent($container->get(ComponentDispatcherFactoryInterface::class));
                $component->setRegistry($container->get(Registry::class));
                $component->setMVCFactory($container->get(MVCFactoryInterface::class));
                $component->setRouterFactory($container->get(RouterFactoryInterface::class));
                return $component;
            }
        );
    }
};
