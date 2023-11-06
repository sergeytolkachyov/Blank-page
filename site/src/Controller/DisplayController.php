<?php

namespace Joomla\Component\Blank\Site\Controller;

// phpcs:disable PSR1.Files.SideEffects
use Joomla\CMS\Factory;

\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Content Component Controller
 *
 * @since  1.5
 */
class DisplayController extends \Joomla\CMS\MVC\Controller\BaseController
{
    /**
     * Method to display a view.
     *
     * @param   boolean  $cachable   If true, the view output will be cached.
     * @param   boolean  $urlparams  An array of safe URL parameters and their variable types, for valid values see {@link JFilterInput::clean()}.
     *
     * @return  DisplayController  This object to support chaining.
     *
     * @since   1.5
     */
    public function display($cachable = false, $urlparams = false)
    {
	    $cachable = true;
	    Factory::getApplication()->getInput()->set('view', 'blank');
	    parent::display($cachable, $urlparams);
        return $this;
    }

}
