<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_users
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');

$this->form->reset(true);
$this->form->loadFile(dirname(__FILE__) . '/' . 'reset_complete.xml');
?>
<div class="row">
	<div class="col-lg-8 offset-lg-2">
		<div class="reset-complete<?php echo $this->pageclass_sfx; ?>">
			<?php if ($this->params->get('show_page_heading')) : ?>
				<div class="page-header">
					<h1>
						<?php echo $this->escape($this->params->get('page_heading')); ?>
					</h1>
				</div>
			<?php endif; ?>

			<form action="<?php echo JRoute::_('index.php?option=com_users&task=reset.complete'); ?>" method="post" class="form-validate form-horizontal well">
				<?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
					<fieldset>
						<?php if (isset($fieldset->label)) : ?>
							<p><?php echo JText::_($fieldset->label); ?></p>
						<?php endif; ?>
						<?php echo $this->form->renderFieldset($fieldset->name); ?>
					</fieldset>
				<?php endforeach; ?>


				<button type="submit" class="btn btn-primary validate mt-3">
					<?php echo JText::_('JSUBMIT'); ?>
				</button>

				<?php echo JHtml::_('form.token'); ?>
			</form>
		</div>
	</div>
</div>