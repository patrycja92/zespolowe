<div class="timetables index">
	<h2><?php echo __('Timetables'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('time'); ?></th>
			<th><?php echo $this->Paginator->sort('users_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($timetables as $timetable): ?>
	<tr>
		<td><?php echo h($timetable['Timetable']['id']); ?>&nbsp;</td>
		<td><?php echo h($timetable['Timetable']['time']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timetable['User']['id'], array('controller' => 'users', 'action' => 'view', $timetable['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $timetable['Timetable']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $timetable['Timetable']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $timetable['Timetable']['id']), array(), __('Are you sure you want to delete # %s?', $timetable['Timetable']['id'])); ?>
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

