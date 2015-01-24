<div class="advances view">
<h2><?php echo __('Advance'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($advance['Advance']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cash'); ?></dt>
		<dd>
			<?php echo h($advance['Advance']['cash']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reason'); ?></dt>
		<dd>
			<?php echo h($advance['Advance']['reason']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($advance['Users']['id'], array('controller' => 'users', 'action' => 'view', $advance['Users']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Advance'), array('action' => 'edit', $advance['Advance']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Advance'), array('action' => 'delete', $advance['Advance']['id']), array(), __('Are you sure you want to delete # %s?', $advance['Advance']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Advances'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Advance'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
