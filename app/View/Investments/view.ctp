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

