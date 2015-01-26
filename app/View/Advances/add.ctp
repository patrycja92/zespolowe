<div class="advances form">
<?php echo $this->Form->create('Advance'); ?>
	<fieldset>
		<legend><?php echo __('Add Advance'); ?></legend>
	<?php
		echo $this->Form->input('cash');
		echo $this->Form->input('reason');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

