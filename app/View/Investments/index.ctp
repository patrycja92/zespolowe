<div class="investments index">
	<h2><?php echo __('Investments'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('bid'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($investments as $investment): ?>
	<tr>
		<td><?php echo h($investment['Investment']['id']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['name']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['description']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['bid']); ?>&nbsp;</td>
		<td><?php echo h($investment['Investment']['price']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($investment['User']['id'], array('controller' => 'users', 'action' => 'view', $investment['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $investment['Investment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $investment['Investment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $investment['Investment']['id']), array(), __('Are you sure you want to delete # %s?', $investment['Investment']['id'])); ?>
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
