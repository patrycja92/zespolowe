<div class="investments form">
<?php echo $this->Form->create('Investment'); ?>
	<fieldset>
		<legend><?php echo __('Add Investment'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('bid');
		echo $this->Form->input('price');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

