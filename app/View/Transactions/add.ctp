<div class="transactions form">
<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Add Transaction'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('price');
		echo $this->Form->input('date');
		echo $this->Form->input('user_id');
		echo $this->Form->input('timetable_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
