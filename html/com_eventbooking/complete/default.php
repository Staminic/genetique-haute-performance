<?php
/**
 * @package        	Joomla
 * @subpackage		Event Booking
 * @author  		Tuan Pham Ngoc
 * @copyright    	Copyright (C) 2010 - 2020 Ossolution Team
 * @license        	GNU/GPL, see LICENSE.php
 */
// no direct access
defined( '_JEXEC' ) or die;
?>
<div id="eb-registration-complete-page" class="eb-container">
	<h1 class="eb-page-heading">Inscription - Étape 2</h1>
	<div id="eb-message" class="eb-message"><?php echo JHtml::_('content.prepare', $this->message); ?></div>
</div>
<?php
	if ($this->print)
	{
	?>
		<script type="text/javascript">
			window.print();
		</script>
	<?php
	}
	echo $this->conversionTrackingCode;
?>