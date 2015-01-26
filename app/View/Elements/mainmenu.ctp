
<?php if($this->Session->read('Auth.User')):?>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<?php if($this->Session->read('Auth.User.privilages') <= 1):?>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users' ,'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users' ,'action' => 'index')); ?></li>
		<?php endif; ?>
		
		
		<?php if($this->Session->read('Auth.User.privilages') <=3):?>
		<li><?php echo $this->Html->link(__('New Advance'), array('controller' => 'advances' ,'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Advances'), array('controller' => 'advances' ,'action' => 'index')); ?></li>
	    <li><?php echo $this->Html->link(__('New Timetable'), array('controller' => 'timetables' ,'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Timetables'), array('controller' => 'timetables' ,'action' => 'index')); ?></li>
		<?php endif;?>
		
		<?php if($this->Session->read('Auth.User.privilages') <=2):?>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions' ,'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions' ,'action' => 'index')); ?></li>
		<?php endif; ?>
		
		<?php if($this->Session->read('Auth.User.privilages') == 1 || $this->Session->read('Auth.User.privilages') == 4 ):?>
		<li><?php echo $this->Html->link(__('New Investment'), array('controller' => 'investments' ,'action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Investments'), array('controller' => 'investments' ,'action' => 'index')); ?></li>
		<?php endif; ?>
	</ul>
</div>
<?php endif; ?>
