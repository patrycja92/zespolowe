<div class="advances index">
	<h2><?php echo __('Advances'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('cash'); ?></th>
			<th><?php echo $this->Paginator->sort('reason'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($advances as $advance): ?>
	<tr>
		<td><?php echo h($advance['Advance']['id']); ?>&nbsp;</td>
		<td><?php echo h($advance['Advance']['cash']); ?>&nbsp;</td>
		<td><?php echo h($advance['Advance']['reason']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($advance['User']['id'], array('controller' => 'users', 'action' => 'view', $advance['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $advance['Advance']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $advance['Advance']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $advance['Advance']['id']), array(), __('Are you sure you want to delete # %s?', $advance['Advance']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>

