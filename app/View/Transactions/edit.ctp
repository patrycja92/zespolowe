<div class="transactions form">
<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Edit Transaction'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('price');
		echo $this->Form->input('date');
		echo $this->Form->input('users_id');
		echo $this->Form->input('timetables_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
