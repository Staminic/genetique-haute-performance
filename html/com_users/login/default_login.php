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
$this->form->loadFile(dirname(__FILE__) . '/' . 'login.xml');
?>

<div class="row pt-5">
	<div class="col-lg-8 offset-lg-2">
		<div class="login<?php echo $this->pageclass_sfx; ?>">
			<?php if ($this->params->get('show_page_heading')) : ?>
				<div class="page-header">
					<h1>
						<?php echo $this->escape($this->params->get('page_heading')); ?>
					</h1>
				</div>
			<?php endif; ?>

			<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
				<div class="login-description">
			<?php endif; ?>

			<?php if ($this->params->get('logindescription_show') == 1) : ?>
				<?php echo $this->params->get('login_description'); ?>
			<?php endif; ?>

			<?php if ($this->params->get('login_image') != '') : ?>
				<img src="<?php echo $this->escape($this->params->get('login_image')); ?>" class="login-image" alt="<?php echo JText::_('COM_USERS_LOGIN_IMAGE_ALT'); ?>" />
			<?php endif; ?>

			<?php if (($this->params->get('logindescription_show') == 1 && str_replace(' ', '', $this->params->get('login_description')) != '') || $this->params->get('login_image') != '') : ?>
				</div>
			<?php endif; ?>

			<form action="<?php echo JRoute::_('index.php?option=com_users&task=user.login'); ?>" method="post" class="form-validate form-horizontal well">
				<fieldset>
					<?php echo $this->form->renderFieldset('credentials'); ?>

					<?php if ($this->tfa) : ?>
						<?php echo $this->form->renderField('secretkey'); ?>
					<?php endif; ?>

					<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
						<div class="custom-control custom-checkbox">
								<input id="remember" type="checkbox" name="remember" class="custom-control-input" value="yes" />
								<label class="custom-control-label" for="remember">
									<?php echo JText::_('COM_USERS_LOGIN_REMEMBER_ME'); ?>
								</label>
						</div>
					<?php endif; ?>

					<button type="submit" class="btn btn-primary mt-5">
						<?php echo JText::_('JLOGIN'); ?>
					</button>

					<?php $return = $this->form->getValue('return', '', $this->params->get('login_redirect_url', $this->params->get('login_redirect_menuitem'))); ?>
					<input type="hidden" name="return" value="<?php echo base64_encode($return); ?>" />
					<?php echo JHtml::_('form.token'); ?>
				</fieldset>
			</form>
		</div>

		<div class="mt-3">
			<ul class="nav">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo JRoute::_('index.php?option=com_users&view=reset'); ?>">
						<?php echo JText::_('COM_USERS_LOGIN_RESET'); ?>
					</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="<?php echo JRoute::_('index.php?option=com_users&view=remind'); ?>">
						<?php echo JText::_('COM_USERS_LOGIN_REMIND'); ?>
					</a>
				</li>

				<?php $usersConfig = JComponentHelper::getParams('com_users'); ?>
				<?php if ($usersConfig->get('allowUserRegistration')) : ?>
					<li class="nav-item">
						<a class="nav-link" href="inscription">
							<?php echo JText::_('COM_USERS_LOGIN_REGISTER'); ?>
						</a>
					</li>
				<?php endif; ?>

			</ul>
		</div>
	</div>
</div>
