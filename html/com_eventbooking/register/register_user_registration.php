<?php
/**
 * @package            Joomla
 * @subpackage         Event Booking
 * @author             Tuan Pham Ngoc
 * @copyright          Copyright (C) 2010 - 2020 Ossolution Team
 * @license            GNU/GPL, see LICENSE.php
 */

defined('_JEXEC') or die;

/**
 * Layout variables
 * -----------------
 * @var   string $username
 * @var   string $controlGroupClass
 * @var   string $controlLabelClass
 * @var   string $controlsClass
 */

$params = JComponentHelper::getParams('com_users');
$minimumLength = $params->get('minimum_length', 4);
($minimumLength) ? $minSize = ",minSize[$minimumLength]" : $minSize = "";

$bootstrapHelper   = $this->bootstrapHelper;
?>
<div class="form-group">
	<label>
		<?php echo  JText::_('EB_USERNAME') ?><span class="required">*</span>
	</label>
	<input type="text" name="username" id="username1" class="form-control validate[required,minSize[2],ajax[ajaxUserCall]]<?php echo $bootstrapHelper->getFrameworkClass('uk-input',1); ?>" value="<?php echo $this->escape($this->input->getUsername('username')); ?>" />
</div>

<div class="form-group">
	<label>
		<?php echo  JText::_('EB_PASSWORD') ?><span class="required">*</span>
	</label>
		<input type="password" name="password1" id="password1" class="form-control validate[required<?php echo $minSize;?>]<?php echo $bootstrapHelper->getFrameworkClass('uk-input',1); ?>" value=""/>
</div>

<div class="form-group">
	<label>
		<?php echo  JText::_('EB_RETYPE_PASSWORD') ?><span class="required">*</span>
	</label>
		<input type="password" name="password2" id="password2" class="form-control validate[required,equals[password1]]<?php echo $bootstrapHelper->getFrameworkClass('uk-input',1); ?>" value="" />
</div>