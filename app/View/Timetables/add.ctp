<div class="timetables form">
<?php echo $this->Form->create('Timetable'); ?>
	<fieldset>
		<legend><?php echo __('Add Timetable'); ?></legend>
	<?php
		echo $this->Form->input('time');
<<<<<<< HEAD
		echo $this->Form->input('user_id');
=======
                echo $this->Form->input('user_id',  array('type' => 'hidden', 'value' =>
>>>>>>> 0f1b48f33ea5443228732afcfca179b6c11517cc
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

