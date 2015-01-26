<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('firstname');
		echo $this->Form->input('lastname');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('email');
		echo $this->Form->input('pesel');
		echo $this->Form->input('account');
		echo $this->Form->input('privilages');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
                echo $this->Form->input('last_login',  array('type' => 'hidden', 'value' => 'null'));
                echo $this->Form->input('created',  array('type' => 'hidden', 'value' => date('y-m-d h:i')));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
