<div class="timetables view">
<h2><?php echo __('Timetable'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timetable['Timetable']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($timetable['Timetable']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Users'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timetable['Users']['id'], array('controller' => 'users', 'action' => 'view', $timetable['Users']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Timetable'), array('action' => 'edit', $timetable['Timetable']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Timetable'), array('action' => 'delete', $timetable['Timetable']['id']), array(), __('Are you sure you want to delete # %s?', $timetable['Timetable']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Timetables'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timetable'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Users'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
