<div class="transactions view">
<h2><?php echo __('Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['Users']['id'], array('controller' => 'users', 'action' => 'view', $transaction['Users']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Timetables'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['Timetables']['id'], array('controller' => 'timetables', 'action' => 'view', $transaction['Timetables']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
