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
defined('_JEXEC') or die('Restricted access');

JLoader::register('JHtmlUsers', JPATH_COMPONENT . '/helpers/html/users.php');
JHtml::register('users.spacer', array('JHtmlUsers', 'spacer'));
JHtml::register('users.helpsite', array('JHtmlUsers', 'helpsite'));
JHtml::register('users.templatestyle', array('JHtmlUsers', 'templatestyle'));
JHtml::register('users.admin_language', array('JHtmlUsers', 'admin_language'));
JHtml::register('users.language', array('JHtmlUsers', 'language'));
JHtml::register('users.editor', array('JHtmlUsers', 'editor'));
?>
<?php $fields = $this->form->getFieldset('params'); ?>
<?php if (count($fields)): ?>
	<fieldset id="users-profile-custom">
		<legend><?php echo JText::_('COM_USERS_SETTINGS_FIELDSET_LABEL'); ?></legend>
		<dl class="dl-horizontal">
	<?php foreach ($fields as $field):
		if (!$field->hidden) :
			?>
					<dt><?php echo $field->title; ?></dt>
					<dd>
			<?php if (JHtml::isRegistered('users.' . $field->id)): ?>
							<?php echo JHtml::_('users.' . $field->id, $field->value); ?>
						<?php elseif (JHtml::isRegistered('users.' . $field->fieldname)): ?>
							<?php echo JHtml::_('users.' . $field->fieldname, $field->value); ?>
						<?php elseif (JHtml::isRegistered('users.' . $field->type)): ?>
							<?php echo JHtml::_('users.' . $field->type, $field->value); ?>
						<?php else: ?>
							<?php echo JHtml::_('users.value', $field->value); ?>
						<?php endif; ?>
					</dd>
					<?php endif; ?>
			<?php endforeach; ?>
		</dl>
	</fieldset>
<?php endif; ?>
