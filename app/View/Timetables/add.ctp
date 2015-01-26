<div class="timetables form">
<?php echo $this->Form->create('Timetable'); ?>
	<fieldset>
		<legend><?php echo __('Add Timetable'); ?></legend>
	<?php
		echo $this->Form->input('time');
		echo $this->Form->input('username');

	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

