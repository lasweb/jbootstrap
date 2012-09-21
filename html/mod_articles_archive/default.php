<?php
/**
 * @package     Extly.Templates
 * @subpackage  JBootstrap - Twitter's Bootstrap for Joomla (with Gantry administration)
 * 
 * @author      Prieco S.A. <support@extly.com>
 * @copyright   Copyright (C) 2007 - 2012 Prieco, S.A. All rights reserved.
 * @license     http://http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL 
 *** @link        http://www.extly.com http://support.extly.com
 */
// No direct access
defined('JPATH_BASE') or die('Restricted access');
?>
<?php if (!empty($list)) : ?>
	<ul class="archive-module<?php echo $moduleclass_sfx; ?> nav nav-list">
	<?php foreach ($list as $item) : ?>
			<li>
				<a href="<?php echo $item->link; ?>">
			<?php echo $item->text; ?>
				</a>
			</li>
				<?php endforeach; ?>
	</ul>
	<?php endif; ?>
