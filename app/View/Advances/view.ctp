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

