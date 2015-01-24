<div class="investments view">
<h2><?php echo __('Investment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bid'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['bid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($investment['Investment']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($investment['User']['id'], array('controller' => 'users', 'action' => 'view', $investment['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Investment'), array('action' => 'edit', $investment['Investment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Investment'), array('action' => 'delete', $investment['Investment']['id']), array(), __('Are you sure you want to delete # %s?', $investment['Investment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Investments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Investment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
