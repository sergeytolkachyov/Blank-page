<?php defined('_JEXEC') or die;

/**
 * @package     Joomla.Administrator
 * @subpackage  com_blank
 * @copyright   Copyright (C) Aleksey A. Morozov (AlekVolsk). All rights reserved.
 * @license     GNU General Public License version 3 or later; see http://www.gnu.org/licenses/gpl-3.0.txt
 */

use Joomla\CMS\Language\Text;

?>

<div class="main-card p-4 shadow mb-4 fs-3">
	<?php echo Text::_('COM_BLANK_DESC'); ?>
</div>

<div class="main-card">
    <div class="row row-cols-1 row-cols-md-2">
        <div class="col card">
            <div class="card-body">
                <?php echo Text::_('COM_BLANK_DESC_FULL'); ?>
            </div>
        </div>
        <div class="col card bg-light">
            <div class="card-body">
                <h3 class="card-title"><?php echo Text::_('COM_BLANK_AUTHORS'); ?></h3>
				<?php echo Text::_('COM_BLANK_AUTHORS_DESC'); ?>
            </div>
        </div>

    </div>

</div>

